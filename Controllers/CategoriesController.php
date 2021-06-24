<?php

class CategoriesController{
    public function categories(){
        view("categories");
    }
    public function formCategories(){
        view("formCategories");
    }
    public function addCategories(){
        $category_name=$_POST["name"];
        $created_at=$_POST["created_at"];
        $cover=$_FILES["image"]["name"];
        $tmp=$_FILES["image"]["tmp_name"];
        $covername="";
        if($cover){
            $covername=rand(1,1000)."$cover";
            move_uploaded_file($tmp,"../images/$covername");
        }
        if($covername && $category_name){
            App::get("database")->insert([
                "category_name"=>$category_name,
                "category_image"=>$covername,
                "created_at"=>$created_at
                
            ],"categories");
            HTTP::redirect("/categories","success=true");
        }else{
            HTTP::redirect("/formCategories","error=true");
        }
      
    }
    public function delCat(){
        $id=$_GET["id"];
        $imgname=$_GET["imgname"];
        $removepath="../images/$imgname";
        unlink($removepath);
        App::get("database")->delete("categories",$id);
        HTTP::redirect("/categories","del=true");
    }
    public function editCat(){
        $id=$_GET["id"];
        $category=App::get("database")->where("categories",$id);
        view("editCategories",["category"=>$category]);
    }
    public function updateCategories(){
        $id=$_POST["id"];
        $name=$_POST["name"];
        $orgimg= $_POST["orgimg"];
        $modified_at=$_POST["modified_at"];
        $images=$_FILES["image"]["name"];
        $tmp=$_FILES["image"]["tmp_name"];
        $cover=$_FILES["image"]["name"];
        $covername="";
        if($images){
            $covername=rand(1,1000)."$cover";
            move_uploaded_file($tmp,"../images/$covername");
                App::get("database")->update([
                    "category_name"=>$name,
                    "category_image"=>$covername,
                    "modified_at"=>$modified_at
                ],"categories",$id);
               
            $removepath="../images/".$orgimg;
            unlink($removepath);
            HTTP::redirect("/categories");
        }else{
                App::get("database")->update([
                    "category_name"=>$name,
                    "modified_at"=>$modified_at
                ],"categories",$id);
                HTTP::redirect("/categories");
        }
        
        
    }
}