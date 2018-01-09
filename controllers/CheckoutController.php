<?php
require_once 'Controller.php';

class CheckoutController extends Controller{

    function indexAction(){
        $data = [
            'title'=>'Giỏ hàng của bạn'
        ];
        return $this->loadView('checkout',$data);
    }
}

