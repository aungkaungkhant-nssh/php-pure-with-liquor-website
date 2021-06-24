<?php

class ProductController{
    public function products(){
        view("products");
    }
    public function formProducts(){
        view("formProducts");
    }
    public function addproducts(){
        $productname=$_POST["name"];
        $price=$_POST["price"];
        $description=$_POST["description"];
        $imgname=$_FILES["image"]["name"];
        $tmp=$_FILES["image"]["tmp_name"];
        $category_id=$_POST["category_id"];
        $created_at=$_POST["created_at"];
        $covername="";
        if($imgname){
            $covername=rand(1,1000)."$imgname";
            move_uploaded_file($tmp,"../images/$covername");
        }
        if($productname && $price && $description && $covername && $category_id && $created_at){
            App::get("database")->insert([
                "name"=>$productname,
                "price"=>$price,
                "description"=>$description,
                "image"=>$covername,
                "category_id"=>$category_id,
                "created_at"=>$created_at
            ],"products");
            HTTP::redirect("/products","success=true");
        }else{
            HTTP::redirect("/formProducts","err=true");
        }
       
        
    }
    public function delProducts(){
        $id=$_GET["id"];
        $image=$_GET["image"];
        $removepath="../images/$image";
        unlink($removepath);
        App::get("database")->delete("products",$id);
        HTTP::redirect("/products","del=true");
    }
    public function editProducts(){
        $id=$_GET["id"];
        $product=App::get("database")->where("products",$id);
        view("editProducts",["product"=>$product]);
    }
    public function updateproducts(){
        $id=$_POST["id"];
        $name=$_POST["name"];
        $price= $_POST["price"];
        $orgimg=$_POST["orgimg"];
        $description=$_POST["description"];
        $category_id=$_POST["category_id"];
        $updated_at=$_POST["updated_at"];
        $images=$_FILES["image"]["name"];
        $tmp=$_FILES["image"]["tmp_name"];
        
        $covername="";
        if($images){
            $covername=rand(1,1000)."$images";
            move_uploaded_file($tmp,"../images/$covername");
                App::get("database")->update([
                    "name"=>$name,
                    "price"=>$price,
                    "description"=>$description,
                    "image"=>$covername,
                    "category_id"=>$category_id,
                    "updated_at"=>$updated_at
                ],"products",$id);
                 
            $removepath="../images/".$orgimg;
            unlink($removepath);
            HTTP::redirect("/products");
        }else{
                App::get("database")->update([
                    "name"=>$name,
                    "price"=>$price,
                    "description"=>$description,
                    "category_id"=>$category_id,
                    "updated_at"=>$updated_at
                ],"products",$id);
                HTTP::redirect("/products");
        }
    }
    public function detailProducts(){
        $id=$_GET["id"];
        $detail=App::get("database")->where("products",$id);
       view("detail",["detail"=>$detail]);
    }
}