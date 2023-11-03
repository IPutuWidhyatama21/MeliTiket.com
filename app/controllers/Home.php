<?php

class Home extends Controller {

    public function index() {

        $data['title'] = "Beranda";

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');

    }

    public function booking() {
        
        $data['title'] = 'Booking Tiket';

        $this->view('templates/header', $data);
        $this->view('home/booking', $data);
        $this->view('templates/footer');
    }

}