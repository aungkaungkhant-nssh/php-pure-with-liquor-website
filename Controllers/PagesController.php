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
}