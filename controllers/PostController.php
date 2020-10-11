<?php


class PostController extends Controller{
    public function index(){
        if (!isset($_SESSION["username"])) {
            header("location:/");
            exit();
        }
        $this->model = new PostModel();
        $this->model->connect();
        $conn = $this->model->getConnectData();

        if ($conn){
            $rows = $this->model->selectPostFromData();
            $this->pageData['title'] = "Post";
            $this->pageData['dbData'] =$rows;
            $this->view->render("header","post",$this->pageData);

        }
    }

}