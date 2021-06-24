<?php

$router->get("/","PagesController@home");
$router->get("/about","PagesController@about");
$router->get("/categories","PagesController@categories");
$router->get("/products","PagesController@products");
$router->get("/add-to-cart","PagesController@addToCart");
$router->get("/order","PagesController@order");
$router->get("/clear-cart","PagesController@clear");
$router->post("/submitorder","PagesController@submitOrder");

$router->get("/admin","AuthController@login");
$router->post("/admin/check","AuthController@check");
$router->get("/admin/logout","AuthController@logout");


$router->get("/admin/data","AdminController@data");
$router->get("/admin/admins","AdminController@admins");
$router->get("/admin/addForms","AdminController@addForms");
$router->get("/admin/changeRole","AdminController@changeRole");
$router->get("/admin/deleteAdmin","AdminController@deleteAdmin");
$router->post("/admin/register","AdminController@register");

$router->get('/admin/categories',"CategoriesController@categories");
$router->get('/admin/formCategories',"CategoriesController@formCategories");
$router->post('/admin/addcategories',"CategoriesController@addCategories");
$router->get('/admin/deleteCat',"CategoriesController@delCat");
$router->get('/admin/editCat',"CategoriesController@editCat");
$router->post("/admin/updatecategories","CategoriesController@updateCategories");


$router->get("/admin/products","ProductController@products");
$router->get("/admin/formProducts","ProductController@formProducts");
$router->post("/admin/addproducts","ProductController@addproducts");
$router->post("/admin/updateproducts","ProductController@updateproducts");
$router->get("/admin/deleteProduct","ProductController@delProducts");
$router->get("/admin/editProduct","ProductController@editProducts");

$router->get("/admin/detailProduct","ProductController@detailProducts");

$router->get("/admin/orders","OrderController@orders");
$router->get("/admin/status","OrderController@status");



