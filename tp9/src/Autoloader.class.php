<?php

class Autoloader {
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class){
        $class_path = str_replace('\\', DIRECTORY_SEPARATOR, $class); 
        $file =  __DIR__ .'/'. $class_path . '.class.php';
        
        require_once($file);
    }
}

 ?>
