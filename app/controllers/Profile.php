<?php

class Profile extends Controller {

    public function index() {

        $data['title'] = 'Profile';

        $this -> view('templates/header', $data);
        $this -> view('profile/user_profile', $data);
        $this -> view('templates/footer');

    }

    public function ProfileEdits() {

        $data['title'] = 'Edit Profile';

        $this -> view('templates/header', $data);
        $this -> view('profile_edit/user_profile', $data);
        $this -> view('templates/footer');

    }

}