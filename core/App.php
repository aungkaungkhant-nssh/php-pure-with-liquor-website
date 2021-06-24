<?php

class App{
    public static $data=[];
    public static function bind($key,$value){
        static::$data[$key]=$value;
    }
    public static function get($key){
        return static::$data[$key];
    }
}