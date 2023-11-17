<?php

class Tiket extends Controller{

    public function index() {

        $data['title'] = "Tiket";

        $this->view('templates/header1', $data);
        $this->view('tiket/index', $data);
        $this->view('templates/footer');
    }
}