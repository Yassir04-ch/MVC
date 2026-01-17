<?php
require  'App\Core\Database.php';
require  'App\Models\User.php';
require  'App\controllers\AdminController.php';
require  'App\controllers\AuthController.php';
require  'App\controllers\FrontController.php';
// 'REQUEST_METHOD' 
// 'REQUEST_URI'

// var_dump($_SERVER);

$path = $_SERVER['PATH_INFO'] ?? '/home';


switch ($path) {
    case "/home" :
            echo "this is home";
        break;

    case "/admin" :

        $controller = new AdminController();
            $admin = $controller->index();
        
        break;
    case '/register':
         $controller = new AuthController();
          if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $controller->create();
        } 

         $controller->index('register');
     break;
    case '/login':
         $controller = new AuthController();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $controller->login();
        } 
         $controller->index('login');
     break;
      case '/logout':
         $controller = new AuthController();
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $controller->logout();
        } 
         $controller->index('login');
     break;
     case '/delete':
         $controller = new AdminController();
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $controller->delete();
        } 
         $controller->index();
     break;
   case '/user':
         $controller = new FrontController();
          $controller->index();
        break;
    default : 
         $controller = new AuthController();
             $controller->index('login');
}