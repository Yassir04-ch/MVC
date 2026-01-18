<?php
require_once 'vendor\autoload.php'; 
use App\Core\Router;
// 'REQUEST_METHOD' 
// 'REQUEST_URI'

// var_dump($_SERVER);
 $router = new Router();
 $router->run();