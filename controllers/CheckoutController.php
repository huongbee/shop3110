<?php
require_once 'Controller.php';
session_start();

class CheckoutController extends Controller{

    function indexAction(){
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;

        $data = [
            'title'=>'Giỏ hàng của bạn',
            'cart'=>$cart
        ];
        return $this->loadView('checkout',$data);
    }
}

