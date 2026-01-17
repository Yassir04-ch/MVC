<?php
use App\Models\User;
class AuthController{
      public function index($page) {
       switch ($page) {
        case 'login':
            require 'App\Views\auth\login.php';

            break;
         case 'register':
            require 'App\Views\auth\register.php';
            break;
        default:
        echo "page not found";
            break;
       }
       }

    public function create(){
        $user = new User();
        $user->setFirstname($_POST['firstname']);
        $user->setLastname($_POST['lastname']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setRole($_POST['role']);
        $user->create();
        header("Location:\login"); 
    }

  public function login() {
    session_start();  

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $usermod = new User();
    $user = $usermod->getUser($email);

    if ($user && $password == $user->getPassword()) {
        $_SESSION['firstname'] = $user->getFirstname();
        if ($user->getRole() === 'admin') {
            header("Location: /admin");
            exit;
        } else {
            header("Location: /user");
            exit;
        }
    } else {
        $_SESSION['error'] = "Email or password is incorrect";
        header("Location: /login");
        exit;
    }
}


    
}
