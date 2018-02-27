<?php
require_once 'DBConnect.php';
class AcceptOrderModel extends DBConnect{

    function checkToken($token){
        $sql = "SELECT * FROM bills WHERE token = '$token'";
        return $this->loadOneRow($sql);
    }

}
?>