<?php


class AdminModel extends Model {
    private $rows = [];
    private $id;

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

    public function selectPostFromData(){
        $this->id = $_GET['id'];
        $connection = $this->conn;
        $sql ="SELECT * FROM posts where id= '$this->id' ";
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

    public function deletePostFromData(){
        $id = $_GET['id'];

        $connection = $this->conn;
        $sql = "DELETE FROM posts where id='$id'";
        mysqli_query($connection,$sql);
        $result = mysqli_query($connection,$sql);

        if ($result){
            mysqli_close($connection);
        }
        else{
            echo "Connection error!";
        }
    }

}