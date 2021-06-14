<?php

$router->get("/","PagesController@home");
$router->get("/about","PagesController@about");
$router->get("/categories","PagesController@categories");
$router->get("/products","PagesController@products");