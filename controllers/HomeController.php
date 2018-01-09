<?php
require_once 'Controller.php';

class HomeController extends Controller{

    function indexAction(){
        return $this->loadView('index',[2131]);
    }
}

