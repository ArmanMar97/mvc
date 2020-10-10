<?php


class AdminModel extends Model {
    private $rows = [];

    public function getConnectData(){
        return $this->conn;
    }

    public function selectFromData(){
        $connection = $this->conn;
        $sql ="SELECT * FROM posts";
        mysqli_query($connection,$sql);
        $result = mysqli_query($connection,$sql);
        $fetchedResult = [];

        if (mysqli_num_rows($result)>0){
            while ($fetchedResult = mysqli_fetch_assoc($result)){
                array_push($this->rows,$fetchedResult);
            }
        }

        mysqli_close($connection);

        return $this->rows;
    }

}