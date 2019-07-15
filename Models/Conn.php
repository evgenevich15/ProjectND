<?php


namespace Models;


class Conn
{
    public static function start()
    {
        $dsn = 'mysql:host=localhost;dbname=new_schema;';
        $pdo = new \PDO($dsn, 'root', '');
        return $pdo;
    }

}