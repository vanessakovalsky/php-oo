<?php

// namespace Controller;
//
// use Controller\UtilisateurController as Utilisateur;
include_once('UtilisateurController.class.php');

/**
 *
 */
class MembreUserController extends UtilisateurController
{
  /*
   * En tant que member accés autorisé à certaines actions
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
