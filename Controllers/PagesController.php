<?php
class PagesController{
    public function home(){
        view("home");
    }
    public function about(){
        view("about");
    }
    public function categories(){
        view("categories");
    }
    public function products(){
        view("products");
    }
    public function addToCart(){
        session_start();
       $id=$_GET["id"];
    
        $_SESSION["cart"][$id]++;
      header("Location: /");
    }
    public function order(){
        view("order");
    }
    public function clear(){
        session_start();
        unset( $_SESSION['cart'] );
        header("Location: /");
    }
    public function submitOrder(){
        session_start();
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];
        $created_at=$_POST["created_at"];
        if($name && $email && $address && $created_at){
            $order_id=App::get("database")->insert([
                "name"=>$name,
                "email"=>$email,
                "phone"=>$phone,
                "address"=>$address,
                "created_at"=>$created_at
            ],"orders");
            foreach($_SESSION["cart"] as $id=>$qty){
                App::get("database")->insert([
                    "order_id"=>$order_id,
                    "product_id"=>$id,
                    "qty"=>$qty
                ],"order_items");
             }
             unset($_SESSION["cart"]);
             view("orderSubmit");
        }else{
            header("Location: /order");
        }
       
    }
}