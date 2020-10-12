<?php


class LoginModel extends Model {
    private $data;
    private $errors = [];

    function __construct($data){
        $this->data = $data;
    }

    public function validateUserData(){
        $this->validateUsername();
        $this->validatePassword();
        return $this->errors;
    }


    public function checkUser(){
        $connection = $this->conn;
        $username =  $this->data['username'];
        $password =  $this->data['password'];
        $sql ="SELECT * FROM admin where username='$username' and password='$password'";
        $result = mysqli_query($connection,$sql);
        $fetchedResult =  mysqli_fetch_assoc($result);

        if ($fetchedResult){
            return true;
        }
        else{
            return false;
        }

        mysqli_close($connection);
    }

    public function validateUsername(){
        $val = trim($this->data['username']);
        if (empty($val)){
            $this->addError('username','Username cannot be empty');
        }
    }

    public function validatePassword(){
        $val = trim($this->data['password']);
        if (empty($val)){
            $this->addError('password','Password cannot be empty');
        }
    }

    protected function addError($key,$value){
        $this->errors[$key] = $value;
    }

}