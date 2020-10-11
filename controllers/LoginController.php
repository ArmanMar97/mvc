<?php


class LoginController extends Controller{

    public function index(){
        $this->pageData['title'] = "Login";
        $this->view->render("header","login",$this->pageData);
    }


}