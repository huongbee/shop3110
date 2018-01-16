<?php
require_once 'DBConnect.php';
class HomeModel extends DBConnect{

    function getTodayFoods(){
        $sql = "SELECT f.*, p.url FROM foods f
                INNER JOIN page_url p
                ON f.id_url = p.id
                WHERE f.today=1";
        return $this->loadMoreRows($sql);
    }

    function getAllFoods($vitri = 0, $soluong = 0){
        $sql = "SELECT f.*, p.url FROM foods f
                INNER JOIN page_url p
                ON f.id_url = p.id ";
        if($vitri >= 0 && $soluong>0){
            $sql .=" LIMIT $vitri,$soluong";
        }
        return $this->loadMoreRows($sql);
    }

    function countFoods(){

        $sql = "SELECT count(id) FROM foods";
        return $this->loadOneRow($sql);
    }
}


?>