<?php

include_once('./src/Controller/UtilisateurController.class.php');

/**
 *
 */
class MembreUser extends Utilisateur
{
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
