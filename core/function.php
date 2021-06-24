<?php
function dd($data){
  echo "<pre>";
  var_dump($data);
}
function view($view,$data=[]){
    extract($data);
  return require "./views/$view.view.php";
}
function passCheck($password){
  try{
    if(strlen($password)>=6){
      return $bol=preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/",$password);
    }
  }catch(PDOException $e){
    return $e->getMessage();
  }

}
function mailCheck($email){
  try{
    return preg_match("/^[A-Za-z]+[[:digit:]]+@[a-z]+\.[a-z]{2,4}+$/",$email);
  }catch(PDOException $e){
    return $e->getMessage();
  }

}