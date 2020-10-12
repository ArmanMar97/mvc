<?php


class Controller{

    public $model;
    public $view;
    protected $pageData = array();

    function __construct(){
        $this->view = new View();
        $this->model = new Model();
    }


}