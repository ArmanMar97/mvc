<?php


class Db{

    const HOST = "localhost";
    const USER = "root";
    const PASSWORD = "";
    const DB = "feedback";

    public static function connect(){
        $host = self::HOST;
        $user = self::USER;
        $password = self::PASSWORD;
        $db = self::DB;

        $conn = mysqli_connect(self::HOST,self::USER,self::PASSWORD,self::DB);
        return $conn;
    }

}