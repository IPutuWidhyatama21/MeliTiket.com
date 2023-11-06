<?php

class Database {

    private $db_name = DB_NAME;
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;

    private $dbh;
    private $stmt;

    public function __construct() {

        // Pendifinisan Data Source Name
        $dsn = 'mysqli:host=' . $this -> host . ';dbname=' . $this -> db_name;

        $option = [
            PDO::ATTR_PRESISTENT => true
        ];

    }

}