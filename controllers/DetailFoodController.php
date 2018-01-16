<?php
require_once 'Controller.php';
require_once "model/DetailFoodModel.php";

class DetailFoodController extends Controller{
    
    //detail-food.php?id=1&alias=banh-canh
    function indexAction(){
        $model = new DetailFoodModel;

        $id = $_GET['id'];
        $alias = $_GET['alias'];

        $food = $model->getFoodById($id, $alias);
        
        $data = [
            'title'=>'Chi tiết',
            'food'=>$food
        ];
        return $this->loadView('detail-food',$data);
    }
}

