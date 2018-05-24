<?php

namespace Controller;

use Controller\UtilisateurController as Utilisateur;

/**
 *
 */
class AdminUserController extends Utilisateur
{

  /*
   * En tant qu'admin accés autorisé à tous les actions
   */
  public function has_access($action){
    return TRUE;
  }

  public static function login_check($login, $password){
    // Récupérer le password depuis le login dans la DB
  /*  if($login == 'toto'){
      return 'Connexion OK';
    }
    else{
      return 'Connexion KO';
    }*/
    $data = [
      'nom' => $login,
    ];
    // Créer un objet user à partir de l'id récupéré
    $user = new static($data);
    // Mettre en session mon user, login, role, nom
  }
}
