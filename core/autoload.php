<?php

function __autoload($class)
{
    if(is_file("core/{$class}.php")){
        require_once "core/{$class}.php";
    }

    if(is_file("controllers/{$class}.php")){
        require_once "controllers/{$class}.php";
    }

    if( is_file("core/database/{$class}.php") ){
        require_once "core/database/{$class}.php";
    }
}