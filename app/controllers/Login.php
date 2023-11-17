<?php

class Login extends Controller{

    public function index(){

        $data['title'] = 'Login Page';

        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }
    public function logout(){
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();

        header('location: '. BASEURL .'/login');
    }
    public function log() {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if ($this->model('Login_model')->cekUserTrue($email) > 0){

            $data = $this->model('Login_model')->ambilDataUser($email);
            $passdb = $data['pass'];

            if(password_verify($pass, $passdb)) {
                session_start();

                if ($data['status'] == 'admin'){
                    $_SESSION['status'] == 'admin';
                    $location = 'admin';
                }
                else if($data['status'] == 'user'){
                    $_SESSION['status'] == 'user';
                    $location = 'home/indexs';
                }

            }
        }
        header('Location: ' . BASEURL . '/' . $location);
        exit;
    }
}