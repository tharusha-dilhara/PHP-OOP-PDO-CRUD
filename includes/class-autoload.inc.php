<?php


spl_autoload_register(function($class){
    $path="./classes/";
    $extension=".class.php";
    $fileName=$path.$class.$extension;
    if(file_exists($fileName)){
        require_once($fileName);
    }else{
        die($class.' class not include error');
    }
});
