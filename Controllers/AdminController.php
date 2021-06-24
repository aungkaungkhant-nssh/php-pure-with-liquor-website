<?php

class AdminController{
  
    public function data(){
        view("adminHome");
    }
    public function admins(){
        view("adminAdmins");
    }
    public function addForms(){
        view("addForm");
    }
    public function register(){
        view("Register");
    }
    public function changeRole(){
    
        $role=$_GET["role"];
        $id=$_GET["id"];
        $bol=App::get("database")->update([
            "role_id"=>$role
        ],"admins",$id);
        if($bol){
            HTTP::redirect("/admins","success=true");
        }else{
            HTTP::redirect("/admins","error=true");
        }
     
    }
    public function deleteAdmin(){
        $id=$_GET["id"];
       $bol=App::get("database")->delete("admins",$id);
        if($bol){
            HTTP::redirect("/admins","delete=true");
        }else{
            HTTP::redirect("/admins","error=true");
        }

    }

}