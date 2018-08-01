<?php
//Employer class
namespace Src\Classes;

class Employee{

    public function __construct($conn){
        $this->conn = $conn;
    }

//Method to get all the records or particular record with id
    public function getEmployees($id=null){

    }

}

