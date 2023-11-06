<?php 

class Booking_model {

    private $tableBooking = 'booking';
    private $db;

    public function __construct() {
        $this -> db = new Database;
    }

    public function queryDataBooking() {

        $this -> db -> query("SELECT * FROM " . $this -> tableBooking . " INNER JOIN user ON " . $this -> tableBooking . ".id_user = user.id_user JOIN tiket ON " . $this -> tableBooking . ".id_tiket = tiket.id_tiket");
        return $this -> db -> resultSet();

    }

    // public function addDataBooking( $BookingData ) {

    //     $QueryIns = "INSERT INTO " . $this -> tableBooking . " VALUES ()";

    //     $this -> db -> query($QueryIns);

    //     $this -> db -> execute();
    //     return $this -> db -> rowCount();

    // }

}