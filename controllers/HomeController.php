<?php
require_once 'Controller.php';

class HomeController extends Controller{

    function indexAction(){
        $title = "Home Page";
        $foods = '234567';
        $data = [
            'title' => $title,
            'foods' => $foods
        ];
        return $this->loadView('index',$data);
    }
}

