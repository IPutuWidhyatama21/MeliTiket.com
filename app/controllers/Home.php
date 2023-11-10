<?php

class Home extends Controller {

    public function index() {

        $data['title'] = "Beranda";

        // Deklarasi Query Data Tiket
        $data['tiket'] = $this -> model('Tiket_model') -> queryDataTiket();

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');

    }

    public function indexs() {

        $data['title'] = "Beranda";

        // Deklarasi Query Data Tiket
        $data['tiket'] = $this -> model('Tiket_model') -> queryDataTiket();

        $this->view('templates/header', $data);
        $this->view('home/index_log', $data);
        $this->view('templates/footer');

    }

    public function booking() {
        
        $data['title'] = 'Booking Tiket';

        // Deklarasi Query Data Booking
        $data['Booking'] = $this -> model('Booking_model') -> queryDataBooking();

        // Deklarasi Query Data Tiket
        $data['tiket'] = $this -> model('Tiket_model') -> queryDataTiket();

        $this->view('templates/header', $data);
        $this->view('home/booking', $data);
        $this->view('templates/footer');
    }

    public function addBooking()
    {
        if( $this -> model('Booking_model') -> addDataBooking($_POST) ) {

            header('Location: ' . BASEURL . '/Home/index');
            exit;

        } else {
            header('Location: ' . BASEURL . '/Home');
        }
    }

}