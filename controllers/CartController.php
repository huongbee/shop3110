<?php
require_once 'model/DetailFoodModel.php';
require_once 'helpers/Cart.php';
session_start();

class CartController {

    function addToCart(){
        $id = $_GET['idSP'];
        $model = new DetailFoodModel;
        $food = $model->selectFoodById($id);

        $oldCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
        $cart = new Cart($oldCart);

        $cart->add($food, $qty=1);
        $_SESSION['cart'] = $cart;

        //print_r($_SESSION['cart']);
        echo $food->name;


    }
}

?>