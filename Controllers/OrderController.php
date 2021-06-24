<?php

class OrderController{
    public function orders(){
        view("order");
    }
    public function status(){
        $status=$_GET["status"];
        $id=$_GET["id"];
        if($status && $id){
            App::get("database")->update([
                "status"=>$status
           ],"orders",$id);
           HTTP::redirect("/orders");
        }else{
            HTTP::redirect("/orders");
        }
    
    }
}