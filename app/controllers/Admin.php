<?php

class Admin extends Controller{

    public function index() {

        $data['title'] = "Dashboard Admin";

        $this->view('templates/header', $data);
        $this->view('admin/index');
        $this->view('templates/footer');
    }
}