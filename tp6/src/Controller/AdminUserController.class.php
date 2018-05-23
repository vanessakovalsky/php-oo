<?php

include_once('./src/Controller/UtilisateurController.class.php');

/**
 *
 */
class AdminUser extends Utilisateur
{

  /*
   * En tant qu'admin accés autorisé à tous les actions
   */
  public function has_access($action){
    return TRUE;
  }
}
