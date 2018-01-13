<?php
require_once 'Controller.php';
require_once 'model/HomeModel.php';

class HomeController extends Controller{

    function indexAction(){
        // echo "<pre>";
        // print_r($_SERVER);
        
        // echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        // die;
        $title = "Home Page";

        $model = new HomeModel;
        $foods = $model->getTodayFoods();

        $allFoods = $model->getAllFoods();
        $tongSP = count($allFoods); //tinh so link phan trang
        /*
             $page = isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']!=0
               ? (int)abs($_GET['page']) : 1;
        */
        $page = 1;
        if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']!=0){
            $page = (int)abs($_GET['page']);
        }

        $soluong = 9;
        $vitri = ($page - 1)*$soluong;
        $allFoods = $model->getAllFoods($vitri, $soluong);

        $tongSoTrang = ceil($tongSP/$soluong);
        $value = [
            'title' => $title,
            'foods' => $foods,
            'allFoods' => $allFoods,
            'tongSoTrang' => $tongSoTrang
        ];
        return $this->loadView('index',$value);
    }


}


