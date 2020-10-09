<?php


class Model{
    protected $db = null;

    public function connect(){
        $this->db = DB::connect();
    }

}