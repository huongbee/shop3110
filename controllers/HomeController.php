<?php
require_once 'Controller.php';
require_once 'model/HomeModel.php';

class HomeController extends Controller{

    function indexAction(){
        $title = "Home Page";

        $model = new HomeModel;
        $foods = $model->getTodayFoods();
        $allFoods = $model->getAllFoods();
        //echo count($allFoods); die; //tinh so link pham trang

        $page = isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']!=0
                ? (int)abs($_GET['page']) : 1;

        $soluong = 9;
        $vitri = ($page - 1)*$soluong;

        $allFoods = $model->getAllFoods($vitri, $soluong);

        //echo count($allFoods); die;
        // echo "<pre>";
        // print_r($foods);
        // echo "</pre>";
        // die;

        $value = [
            'title' => $title,
            'foods' => $foods,
            'allFoods'=>$allFoods
        ];
        return $this->loadView('index',$value);
    }
}


