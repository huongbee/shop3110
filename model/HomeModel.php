<?php
require_once 'DBConnect.php';
class HomeModel extends DBConnect{

    function getTodayFoods(){
        $sql = "SELECT * FROM foods WHERE today=1";
        return $this->loadMoreRows($sql);
    }

    function getAllFoods($vitri = -1,$soluong = -1){
        $sql = "SELECT * FROM foods";
        if($vitri>-1 && $soluong>0){
            $sql .=" LIMIT $vitri,$soluong";
        }
        
        return $this->loadMoreRows($sql);
    }

}


?>