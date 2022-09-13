<?php 



spl_autoload_register(function ($class){
    
    $class_file = str_replace("\\","/", __DIR__ . "/$class.php");
    // echo $class_file;
    include $class_file;
});