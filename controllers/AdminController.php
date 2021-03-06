<?php

class AdminController extends Controller {
    private $dbData;

    public function index(){
        if (!isset($_SESSION["username"])) {
            header("location:/");
            exit();
        }

        else{
            $this->model = new AdminModel();
            $this->model->connect();
            $conn = $this->model->getConnectData();

            if ($conn){
                $rows = $this->model->selectFromData();
                $this->dbData = $rows;
                $this->pageData['title'] = "Admin";
                $this->pageData['dbData'] = $this->dbData;
                $this->view->render("header","admin",$this->pageData);
            }
            else{
                echo "Connection fail!";
            }
        }

    }

    public function post(){
        if (!isset($_SESSION["username"])) {
            header("location:/");
            exit();
        }
        $this->model = new AdminModel();
        $this->model->connect();
        $conn = $this->model->getConnectData();

        if ($conn){
            $rows = $this->model->selectPostFromData();
            $this->pageData['title'] = "Post";
            $this->pageData['dbData'] =$rows;
            $this->view->render("header","post",$this->pageData);

        }
    }

    public function deletePost(){

        if (!isset($_SESSION["username"])) {
            header("location:/");
            exit();
        }

        $this->model = new AdminModel();
        $this->model->connect();
        $conn = $this->model->getConnectData();

        if ($conn){
            $this->model->deletePostFromData();
            header('Location:/admin');
            exit();
        }
    }

}