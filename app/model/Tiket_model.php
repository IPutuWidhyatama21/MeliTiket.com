<?php 

class Tiket_model {

    private $table = 'tiket';
    private $db;

    public function __construct() {
        $this -> db = new Database;
    }

    public function queryDataTiket() {

        $this -> db -> query("SELECT * FROM " . $this -> table);
        return $this -> db -> resultSet();

    }

}