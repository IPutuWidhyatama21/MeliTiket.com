<?php

class Adminhome extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('adminhome/index');
        $this->view('templates/footer');
    }
}