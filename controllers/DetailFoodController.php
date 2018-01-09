<?php
require_once 'Controller.php';

class DetailFoodController extends Controller{
    
    function indexAction(){
        $data = [
            'title'=>'Chi tiết'
        ];
        return $this->loadView('detail-food',$data);
    }
}

