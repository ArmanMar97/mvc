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

}