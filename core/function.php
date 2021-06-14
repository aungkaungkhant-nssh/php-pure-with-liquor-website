<?php
function dd($data){
  echo "<pre>";
  var_dump($data);
}
function view($view,$data=[]){
    extract($data);
  return require "./views/$view.view.php";
}