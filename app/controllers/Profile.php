<?php

class Profile extends Controller {

    public function index() {

        $data['title'] = 'Profile';

        $this -> view('templates/header');
        $this -> view('home/profile');
        $this -> view('templates/footer');

    }

}