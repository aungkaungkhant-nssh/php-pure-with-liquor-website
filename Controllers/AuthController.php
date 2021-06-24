<?php

class AuthController{
    public function login(){
        view("login");
    }
    public function logout(){
        session_start();
        unset( $_SESSION['user'] );
        HTTP::redirect("");
    }
    public function check(){
       $email=$_POST["email"];
       $passowrd=$_POST["password"];  
       $admins=App::get("database")->all("admins");
       $result=[];
       if($admins){
           foreach($admins as $admin){
            if(password_verify($passowrd, $admin["password"])) {
                $result=App::get("database")->checkEmailAndPassword($email,$admin["password"]);
            }
         }
         if($result){
             session_start();
            $_SESSION["user"]=$result;
            HTTP::redirect("/data");
        }else{
            HTTP::redirect("","err=true");
        }
       }

    }
}