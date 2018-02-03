<?php
require_once 'DBConnect.php';
class CheckoutModel extends DBConnect{
    function insertCustomer($name,$email,$address,$phone){
        $sql = "INSERT INTO customers(name,email,address,phone)
                VALUES('$name','$email','$address','$phone')";
        return $this->executeQuery($sql) ? $this->getLastId() : false; 
    }
}