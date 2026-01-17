<?php
use App\Models\User;
class AuthController{
    public function index(){
      require 'App\Views\login.php';
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
    
}
