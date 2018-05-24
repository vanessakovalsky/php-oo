<?php

class Autoloader {

  static function register(){
    spl_autoload_register(array(__CLASS__, 'autoload'));
  }

  static function autoload($class){
    require(__DIR__.'/'.str_replace('\\', '/', $class).'.class.php');
  }

}

 ?>
