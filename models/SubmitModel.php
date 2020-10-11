<?php


class SubmitModel extends Model{
    private $data;
    private $errors = [];
    private static $requiredFields = ['first_name','last_name','email','message'];

    function __construct($data){
        $this->data = $data;
        unset($data['submit']);
    }

    public function getConnectData(){
        return parent::getConnectData();
    }

    public function insertIntoTable(){
        $connection = $this->conn;
        $firstName =  $this->data['first_name'];
        $lastName =  $this->data['last_name'];
        $email =  $this->data['email'];
        $message =  $this->data['message'];
        $sql ="INSERT INTO posts(first_name, last_name, email,message) VALUES('$firstName','$lastName','$email','$message')";
        mysqli_query($connection,$sql);
    }

    public function checkEmail(){
        $connection = $this->conn;
        $email =  $this->data['email'];
        $select = mysqli_query($this->conn, "SELECT `email` FROM `posts` WHERE `email` = '".$email."'");
        if(mysqli_num_rows($select)) {
            return false;
        }
        else{
            return true;
        }
        mysqli_query($connection,$sql);
    }

    public function validateForm(){

        $this->validateFirstName();
        $this->validateLastName();
        $this->validateEmail();
        $this->validateMessage();
        return $this->errors;

    }


    protected function validateFirstName(){
        $val = trim($this->data['first_name']);
        if (empty($val)){
            $this->addError('first_name','First name cannot be empty');
        }else {
            if (!preg_match("/^([a-zA-Z' ]+)$/",$val)){
                $this->addError('first_name','First name is not valid!');
            }
        }
    }

    protected function validateLastName(){
        $val = trim($this->data['last_name']);
        if (empty($val)){
            $this->addError('last_name','Last name cannot be empty');
        }else {
            if (!preg_match("/^([a-zA-Z' ]+)$/",$val)){
                $this->addError('last_name','Last name is not valid!');
            }
        }
    }


    protected function validateEmail(){
        $val = trim($this->data['email']);
        if (empty($val)){
            $this->addError('email','Email cannot be empty');
        }else {
            if (!filter_var($val,FILTER_VALIDATE_EMAIL)){
                $this->addError('email','Email is not valid!');
            }
        }
    }

    protected function validateMessage(){
        $val = trim($this->data['message']);
        if (empty($val)){
            $this->addError('message','Message cannot be empty');
        }
    }

    protected function addError($key,$value){
        $this->errors[$key] = $value;
    }

}