<?php

namespace Controller;

use Controller\UtilisateurController;

/**
 *
 */

class MembreUser extends UtilisateurController
{

  function __construct()
  {
    // code...
  }
  /*
   * En tant qu'admin accés autorisé à tous les actions
   */
  public function has_access($action){
    if(in_array($action, ['ListeJeu'])){
      return TRUE;
    }
    else {
      return FALSE;
    }
  }
}
