<?php

$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$role_id=$_POST["role_id"];
$phone=$_POST["phone"];
$created_at=$_POST["created_at"];
$passwordCheck=passCheck($password);
$emailCheck=mailCheck($email);
    
if($emailCheck && $passwordCheck){
    $password=password_hash($password,PASSWORD_BCRYPT);
    App::get("database")->insert([
    "name"=>$name,
    "email"=>$email,
    "phone"=>$phone,
    "password"=>$password,
    "role_id"=>$role_id,
    "created_at"=>$created_at
    ],"admins");
    HTTP::redirect("/admins");
}else{
    HTTP::redirect("/addForms","err=true");
}

