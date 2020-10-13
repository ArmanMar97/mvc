<?php


class Model {
    protected $conn = null;


    public function connect(){
        $this->conn = DB::connect();
    }

    public function getConnectData()
    {
        return $this->conn;
    }

}