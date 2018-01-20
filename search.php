<?php

require_once 'controllers/HomeController.php';
$c = new HomeController;
if(!$_POST){
    $c->searchAction();
}
else echo $_POST['tukhoa'];

