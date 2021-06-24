<?php

class HTTP{
    static  $base="/admin";
    public static function redirect($path,$query=""){
        $url=static::$base.$path;
        if($query) $url .= "?$query";
        header("Location: $url");
        exit();
    }
}