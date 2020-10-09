<?php


class db{

    const HOST = "localhost";
    const USER = "root";
    const PASSWORD = "";
    const DB = "";

    public static function connect(){
        $host = self::HOST;
        $user = self::USER;
        $password = self::PASSWORD;
        $db = self::DB;

        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        return $conn;
    }

}