<?php
require_once 'Controller.php';

class DetailFoodController extends Controller{
    
    function indexAction(){
        return $this->loadView('detail-food',[2131]);
    }
}

