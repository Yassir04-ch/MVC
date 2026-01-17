<?php
use App\Models\User;
class AdminController{

    public function index(){
        $user = new User();
        $users = $user->findAll();
        require "App\Views\admin.php";
    }
    
}