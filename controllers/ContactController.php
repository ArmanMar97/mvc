<?php



class ContactController extends Controller {

    public function index(){
        $this->pageData['title'] = "Contact";
        $this->view->render("header","contact",$this->pageData);
    }

    public function submit(){
        if (isset($_POST['submit'])){
            $data = $_POST;
            $contactObject = new ContactModel($data);
            $errors = $contactObject->validateForm();
            $this->pageData = $errors;
            $this->view->render("header","contact",$this->pageData);

        }
        else{
            $this->pageData['submit'] = "You need to provide information";
            $this->view->render("header","contact",$this->pageData);
        }
    }

}