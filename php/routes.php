<?php 

$request = $_SERVER['REQUEST_URI'];


switch ($request) {
    case $request == '/product':
        require_once('./product.php');
        break;
    case $request == '/user':
        require_once('./user.php');
        break;
    default :
        require_once('welcome.php');
        break;

}

?>