<?php


class Model {
    protected $conn = null;

//    public function __construct(){
//      $this->tableName =
//    }

    public function connect(){
        $this->conn = DB::connect();
    }

    public function getConnectData()
    {
        return $this->conn;
    }

}