<?php
require_once 'Controller.php';
require_once 'model/HomeModel.php';

class HomeController extends Controller{

    function indexAction(){
        $title = "Home Page";

        $model = new HomeModel;
        $foods = $model->getTodayFoods();
        $allFoods = $model->getAllFoods();

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


