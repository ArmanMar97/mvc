<?php


class DB{

    const  HOST = "localhost";
    const USER = "root";
    const PASSWORD = "";
    const DB = "";


    public static function connect( $dbName = self::DB){
        $host = self::HOST;
        $user = self::USER;
        $password = self::PASSWORD;
        $db = self::DB;


        if (isset($dbName)){
            $db = $dbName;
        }


        $conn = mysqli_connect($host, $user, $password, $db);
        return $conn;

    }

    public static function createDatabase( $dbName){
        $conn = self::connect();
        $sql = "CREATE DATABASE $dbName";

        if ($conn){
            mysqli_query($conn,$sql);
        }
        else{
            echo "Connection error!";
        }

    }

    public static function createPostsTable($dbName=self::DB){


        if (isset($dbName)){
            $dbName = $dbName;
        }

        $conn = self::connect($dbName);

        $sql = "CREATE TABLE IF NOT EXISTS `posts` (
                  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
                    `first_name` varchar(255) DEFAULT NULL,
                    `last_name` varchar(255) DEFAULT NULL,
                      `email` varchar(255) DEFAULT NULL,
                        `message` text DEFAULT NULL,
                        `sent_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                        UNIQUE KEY `id` (`id`)
                        ) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4";
        if ($conn){
            $result = mysqli_query($conn,$sql);
        }
        else{
            echo "Connection error!";
        }
    }

    public static function createAdminTable($dbName=self::DB){

        if (isset($dbName)){
            $dbName = $dbName;
        }
        $conn = self::connect($dbName);

        $sql = "CREATE TABLE IF NOT EXISTS `admin` (
                  `username` varchar(255) DEFAULT NULL,
                  `password` varchar(255) DEFAULT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

        if ($conn){
            $result = mysqli_query($conn,$sql);
        }
        else{
            echo "Connection error!";
        }

    }

    public static function createAdminUser( $username, $password, $dbName=self::DB){
        if (isset($dbName)){
            $dbName=$dbName;
        }
        $conn = self::connect($dbName);

        $sql = "INSERT INTO admin (username, password)
                SELECT * FROM (SELECT '$username', '$password') AS tmp
                WHERE NOT EXISTS (
                    SELECT username FROM admin WHERE username = '$username'
                ) LIMIT 1;";

        if ($conn){
            $result = mysqli_query($conn,$sql);
        }
        else{
            echo "Connection error!";
        }

    }

}