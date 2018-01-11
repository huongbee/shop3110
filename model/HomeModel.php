<?php
require_once 'DBConnect.php';
class HomeModel extends DBConnect{

    function getTodayFoods(){
        $sql = "SELECT * FROM foods WHERE today=1";
        return $this->loadMoreRows($sql);
    }
}


?>