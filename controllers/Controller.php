<?php


class Controller{

    public $model;
    public $view;
    public $id;
    protected $pageData = array();

    function __construct(){
        $this->view = new View();
        $this->model = new Model();
//        $this->id = $id;
    }


}