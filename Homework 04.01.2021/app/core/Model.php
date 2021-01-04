<?php


namespace App\core;


abstract class Model
{
    protected static $fillable = [];
    protected static $tableName = null;

    //создадим запрос по поиску по id
    public static function findById($id)
    {
        $tableName = self::getTableName();
        //пишем запрос
        $sql = "select * from " . $tableName . " where id = " . $id;
        //вызываем соединение с базой данной
        $connection = DB::getConnection();
        //выполним этот запрос
        $res = $connection->query($sql);
        //проверяем, если результат вернул строки из бд, которые затронул наш запрос
        if ($res->num_rows) {
            return $res->fetch_object(static::class);  //возвращает текущую строку в виде объекта
        }
    }

    public static function selectWithConditions(array $arr)
    {
        $tableName = self::getTableName();
        $sql = "SELECT * FROM ".$tableName;
        if (isset($arr['where']) && !empty($arr['where'])){
            $sql .= ' Where ';
            $split = false;
            foreach ($arr['where'] as $condition){
                if(count($condition) == 2){
                    $split = true;
                    $sql .= "`{$condition[0]}` = '{$condition[1]}' AND ";
                }elseif (count($condition) == 3){
                    $split = true;
                    $sql .="`{$condition[0]}` {$condition[1]} '{$condition[2]}' AND ";
                }
            }
            if ($split) {
                $sql = substr($sql, 0, -5);
        }


        }
        if (isset($arr['order']) && !empty($arr['order'])){
            if(count($arr['order']) == 2){
                $sql.= ' ORDER by '.$arr['order']['field'].' '.$arr['order']['way'];
            }elseif (count($arr['order']) == 1){
                $sql.= ' ORDER by '.$arr['order']['field'];
            }
        }
        //сделать проверки
        if (isset($arr['limit']) && !empty($arr['limit'])){
            if(count($arr['limit']) == 2){
                $sql.= ' LIMIT '.$arr['limit']['offset'].', '.$arr['limit']['limit'];
            }elseif (count($arr['limit']) == 1){
                $sql.= ' LIMIT '.$arr['limit']['limit'];
            }
        }
        //var_dump($sql);

        $connection = DB::getConnection();
        //выполним этот запрос
        $res = $connection->query($sql);
        //проверяем, если результат вернул строки из бд, которые затронул наш запрос
        if ($res->num_rows) {
            //объявим массив
            $arr = [];
            //перебераем результат через цикл while
            while ($obj = $res->fetch_object(static::class)) {
                //сохраним результат в $arr
                $arr[] = $obj;
            }
        }
        return $arr;



    }

    public static function getAll($limit = null, $offset = null)
    {
        $limitStr = null;
        //если указан Limit или offset, то
        if ($limit || $offset) {
            $limitStr = ' LIMIT ' . ($offset ?? 0) . ',' . ($limit ?? 100);
        }

        $tableName = self::getTableName();
        //пишем запрос
        $sql = "select * from " . $tableName . $limitStr;
        //вызове соединение с базой данной
        $connection = DB::getConnection();
        //выполним этот запрос
        $res = $connection->query($sql);
        //проверяем, если результат вернул строки из бд, которые затронул наш запрос
        if ($res->num_rows) {
            //объявим массив
            $arr = [];
            //перебераем результат через цикл while
            while ($obj = $res->fetch_object(static::class)) {
                //сохраним результат в $arr
                $arr[] = $obj;
            }
        }
        return $arr;
    }

    public function save()
    {
        $tableName = static::getTableName();
        if (isset($this->id) && !empty($this->id)) {
//            $colums = "`" . implode('`,`', static::$fillable) . "`";
//            $values = [];
//
//            $values = "'" . implode("' , '", $values) . "'";
            $sql = "UPDATE " . $tableName . " SET ";
            foreach (static::$fillable as $column) {
                $sql .= "`$column` = '" . $this->{$column} . "' ,";
            }
            $sql = substr($sql, 0, -1);
            $sql .= "WHERE id = " . $this->id;
            $connection = DB::getConnection();
            $connection->query($sql);
            return static::findById($this->id);

        } else {
            //var_dump($this);
            $values = [];
            foreach (static::$fillable as $column) {
                $values[$column] = $this->{$column};
            }
            return static::create($values);
        }


    }

    public static function create($arr = [])
    {   //Чтобы передать название столбцов таблицы БД делаем:
        //из массива достаем ключи и сохраним в массив $keys. Эти ключи название столбцов таблицы в БД
        $keys = array_keys($arr);
        //Объединим ключи массива $keys в строку и возьмем их в косые кавычки, чтобы передать название столбцов таблицы БД в запросе
        $keys = '`' . implode('`,`', $keys) . '`';

        //Чтобы передать значение, которое хотим добавить в таблицу БД делаем:
        //из массива достаем значения и сохраняем в массив $values. Эти значения - это значения, которые хотим сохранить в базу данных
        $values = array_values($arr);
        //Объединяем значения массива $values в строку и возьмем их в косые кавычки, чтобы передать их в запрос
        $values = "'" . implode("','", $values) . "'";


        $tableName = self::getTableName();
        $connection = DB::getConnection();
        //пишем запрос
        $sql = 'INSERT into ' . $tableName . "($keys) VALUES ($values)";
        //выполняем его
        // var_dump($sql);
        $connection->query($sql);
        //var_dump($connection->insert_id);
        return static::findById($connection->insert_id);
    }

    public static function getTableName()
    {
        if (static::$tableName) {
            return static::$tableName;
        }

        $tableName = explode('\\', static::class);
        $tableName = end($tableName);
        $tableName = mb_strtolower($tableName) . 's';
        return $tableName;
    }

    public function load(array $arr)
    {
        foreach ($arr as $key => $item) {
            if (in_array($key, static::$fillable, true)) {
                $this->{$key} = $arr[$key];
            }
        }
    }

    public static function delete($id)
    {
        $tableName = self::getTableName();
        $connection = DB::getConnection();
        $sql = "DELETE FROM " . $tableName . " WHERE id= " . $id;
        return $connection->query($sql);
    }
}
