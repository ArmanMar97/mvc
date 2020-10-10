<?php



class ContactController extends Controller {

    public function index(){
        $this->pageData['title'] = "Contact";
        $this->view->render("header","contact",$this->pageData);
    }

    public function submit(){
        if (isset($_POST['submit'])){
            $data = $_POST;
            $this->model = new ContactModel($data);
            $errors = $this->model->validateForm();
            if (!empty($errors)){
                $this->pageData = $errors;
                $this->view->render("header","contact",$this->pageData);
                exit();
            }
            else{
                $this->model->connect();
                $conn = $this->model->getConnectData();
                if (!$conn){
                    $this->pageData['dbMessage'] = "Sorry connection error try later!";
                    $this->view->render("header","contact",$this->pageData);
                    exit();
                }
                else {
                    $this->model->insertIntoTable();
                    $this->pageData['dbMessage'] = "Your feedback is successfully sent!";
                    $this->view->render("header","contact",$this->pageData);
                    exit();
                }
            }
        }
        else{
            $this->pageData['dbMessage'] = "You need to provide information";
            $this->view->render("header","contact",$this->pageData);
        }
    }

}