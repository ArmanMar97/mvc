<?php


class indexController extends Controller {

    public function index(){
       $this->view->render("index");
       $this->pageData['title'] = "Home";
    }

}