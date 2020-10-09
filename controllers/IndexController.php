<?php


class indexController extends Controller {

    public function index(){
       $this->pageData['title'] = "Home";
       $this->view->render("header","index",$this->pageData);
    }

}