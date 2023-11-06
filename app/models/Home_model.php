<?php 

class Home_model {

    private $table = 'tiket';
    private $db;

    public function __construct() {
        $this -> db = new Database;
    }

}