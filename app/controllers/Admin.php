<?php

class Admin extends Controller{

    public function index() {

        $data['title'] = "Dashboard Admin";

        $this->view('templates/header1', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }
}