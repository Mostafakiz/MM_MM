<?php

class Connection{
    public $db_params;
    public function __construct(){
        // $this->$db_params=require_once __DIR__ .'/../config.php';
        $this->db_params=require('config.php');
    }
    public function getConnection(){
        //echo $this->db_params['username'];
        $conn=mysqli_connect($this->db_params['servername'],
        $this->db_params['username'],
        $this->db_params['password'],
        $this->db_params['dbname']);
        if($conn->connect_error){
            die("Connection falid : ".$conn->connect_error);
        }

        return $conn;
    }
}
?>