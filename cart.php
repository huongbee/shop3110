<?php
require_once 'controllers/CartController.php';
$c= new CartController;
return $c->addToCart();


?>