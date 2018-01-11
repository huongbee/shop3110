<?php
require_once 'Controller.php';
require_once 'model/HomeModel.php';

class HomeController extends Controller{

    function indexAction(){
        $title = "Home Page";

        $model = new HomeModel;
        $foods = $model->getTodayFoods();

        // echo "<pre>";
        // print_r($foods);
        // echo "</pre>";
        // die;

        $data = [
            'title' => $title,
            'foods' => $foods
        ];
        return $this->loadView('index',$data);
    }
}

