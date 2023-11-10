<?php

class Login_model {
    private $tabel = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cekUserTrue($email){
        $this->db->query('SELECT * FROM user WHERE email =:email');
        $this->db->bind('email', $email);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ambilDataUser($email){
        $this->db->query('SELECT * FROM user WHERE email =:email');
        $this->db->bind('email', $email);

        return $this->db->single();
    }

}