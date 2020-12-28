<?php


namespace App\core;


abstract class Model
{
    protected static $tableName = null;

    //создадим запрос по поиску по id
    public static function findById($id)
    {
        $tableName = self::getTableName();
        //пишем запрос
        $sql = "select * from " . $tableName . " where id = " . $id;
        //вызове соединение с базой данной
        $connection = DB::getConnection();
        //выполним этот запрос
        $res = $connection->query($sql);
        //проверяем, если результат вернул строки из бд, которые затронул наш запрос
        if ($res->num_rows) {
            return $res->fetch_object(static::class);  //возвращает текущую строку в виде объекта
        }
    }

    public static function getAll($limit = null, $offset = null)
    {
        $limit = null;
        //если указан Limit или offset, то
        if ($limit || $offset){
            $limitStr = ' LIMIT '. ($offset ?? 0) . ',' . ($limit ?? 100);
        }

        $tableName = self::getTableName();
        //пишем запрос
        $sql = "select * from " . $tableName. $limitStr;
        //вызове соединение с базой данной
        $connection = DB::getConnection();
        //выполним этот запрос
        $res = $connection->query($sql);
        //проверяем, если результат вернул строки из бд, которые затронул наш запрос
        if ($res->num_rows) {
            //объявим массив
            $arr = [];
            //перебераем результат через цикл while
            while ($obj = $res->fetch_object(static::class)){
                //сохраним результат в $arr
                $arr[] = $obj;
            }
        }
        return $arr;
    }

    public function save()
    {
        if (isset($this->id) && !empty($this->id)){
            //update
        }else{
            //insert
            static::create([]);
        }


    }

    public static function create($arr = [])
    {   //Чтобы передать название столбцов таблицы БД делаем:
        //из массива достаем ключи и сохраним в массив $keys. Эти ключи название столбцов таблицы в БД
        $keys = array_keys($arr);
        //Объединим ключи массива $keys в строку и возьмем их в косые кавычки, чтобы передать название столбцов таблицы БД в запросе
        $keys = '`'.implode('`,`', $keys).'`';

        //Чтобы передать значение, которое хотим добавить в таблицу БД делаем:
        //из массива достаем значения и сохраняем в массив $values. Эти значения - это значения, которые хотим сохранить в базу данных
        $values = array_values($arr);
        //Объединяем значения массива $values в строку и возьмем их в косые кавычки, чтобы передать их в запрос
        $values = "'".implode("','", $values)."'";


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
        $tableName = mb_strtolower($tableName) .'s';
        return $tableName;
    }
}
