<?php
require_once 'controllers/CartController.php';
$c= new CartController;
if($_GET['action'] == 'add'){
    return $c->addToCart();
}
elseif($_GET['action'] == 'update'){
    return $c->updateCart();
}

//return $_GET['action'] == 'add' ? $c->addToCart() : $c->updateCart();

?>