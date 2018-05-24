<?php

namespace Exception;

/**
 *
 */
class KingoludoException extends Exception
{
    public function showMessage($message){
      $file = fopen('./logs/error.log','a');
      $ecrire = fputs($file,$message);
      fclose($file);
    }

}
