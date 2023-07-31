<?php
//// Require our autoloader

include_once 'app/controllers/HomeController.php';

$q = $_GET['q'] ?? '';
if($q == ''){
    $homeController = new HomeController();
    $homeController->home();
}
