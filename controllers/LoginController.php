<?php


class LoginController extends Controller{

    public function index(){
        $this->pageData['title'] = "Login";
        $this->view->render("header","login",$this->pageData);
    }

    public function auth(){
        if (isset($_POST['submit'])){
            $data = $_POST;
            $this->model = new LoginModel($data);
            $errors = $this->model->validateUserData();
            if (!empty($errors)){
                $this->pageData = $errors;
                $this->view->render("header","login",$this->pageData);
                exit();
            }
            else{
                $this->model->connect();
                $conn = $this->model->getConnectData();
                if (!$conn){
                    $this->pageData['loginMessage'] = "Sorry connection error try later!";
                    $this->view->render("header","login",$this->pageData);
                    exit();
                }
                else {
                    $userCheck = $this->model->checkUser();
                    if ($userCheck){
                        $_SESSION['username'] = $_POST['username'];
                        header('Location:/admin');
                        exit();
                    }
                    else{
                        $this->pageData['loginMessage'] = "Wrong credentials!";
                        $this->view->render("header","login",$this->pageData);
                        exit();
                    }
                }
            }
        }
        else{
            $this->pageData['loginMessage'] = "You need to provide information";
            $this->view->render("header","login",$this->pageData);
        }
    }

    public function logOut(){
        session_unset();
        session_destroy();
        header('Location:/');
        exit();;
    }


}