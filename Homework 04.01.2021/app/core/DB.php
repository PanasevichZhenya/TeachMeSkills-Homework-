<?php


namespace App\core;


use mysqli;

//Подключимся к базе данных
class DB
{  //объявим приватный атрибут $connection = null, в котором будем хранить соединение в БД
    private static $connection = null;

    //метод получения подключения
    public static function getConnection()
    {

        //проверим, если $connection не существует, то подлючимся к базе данных
        if (!self::$connection) {
            self::$connection = new mysqli('localhost', 'homestead', 'secret', 'test_blog');
        }

        //вернем переменную $connection
        return self::$connection;
    }




}
