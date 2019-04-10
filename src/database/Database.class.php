<?php

require "credentials.config.php";
class Database
{

    private static $conn = false;

    public static function connect()
    {
        if(self::$conn){
            return self::$conn;
        }

        self::$conn = new PDO('mysql:host='.DB_HOST.'; dbname='.DATABASE.';charset=utf8', USER, PASSWORD);
        self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return self::$conn;

    }

    public static function close()
    {
        self::$conn = false;
    }

}
