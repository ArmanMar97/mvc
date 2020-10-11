<?php



class ContactController extends Controller {

    public function index(){
        $this->pageData['title'] = "Contact";
        $this->view->render("header","contact",$this->pageData);
    }



}