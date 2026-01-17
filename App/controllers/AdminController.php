<?php

use App\Models\User;

class AdminController{
    public function index(){
        $user = new User();
        $users = $user->findAll();
        session_start();
        require "App\Views\back\admin.php";
    }
    public function delete(){
        $id = $_GET['id'];
         $user = new User();
         $user->deletuser($id);
    }
}