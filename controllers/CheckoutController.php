<?php
require_once 'Controller.php';
require_once 'helpers/Cart.php';
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

    function checkoutAction(){
        //POST
        echo $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $note = $_POST['note'];

        
    }
}

