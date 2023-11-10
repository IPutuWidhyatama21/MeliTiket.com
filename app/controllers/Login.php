<?php

class Login extends Controller{

    public function index(){
        $this->view('templates/header');
        $this->view('login/index');
        $this->view('templates/footer');
    }
    public function log() {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if ($this->model('Login_model')->cekUserTrue($email) > 0){

            $data = $this->model('Login_model')->ambilDataUser($email);
            $passdb = $data['pass'];

            if(password_verify($pass, $passdb)) {
                header('Location: ' . BASEURL . '/home');

                // if ($data['status'] = 'admin'){
                //     $_SESSION['status'] = 'admin';
                //     $location = 'adminhome';
                // }
                // else if($data['status'] = 'user'){
                //     $_SESSION['status'] = 'admin';
                //     $location = 'home';
                // }

            }
        }
        // header('Location: ' . BASEURL . '/' . $location);
        // exit;
    }
}