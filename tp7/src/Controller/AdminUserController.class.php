<?php

/**
 *
 */
 include_once('UtilisateurController.class.php');

class AdminUser extends UtilisateurController
{

  function __construct()
  {
    // code...
  }

  public static function connexion(){
    // Envoyer un formulaire
    if(empty($_POST)){
      $formulaire = include_once('./src/View/formulaire_connexion.html.php');
      return $formulaire;
    }
    //traiter le formulaire
    else{
      include_once('./src/Model/UtilisateurModel.class.php');
      $userModel = new UtilisateurModel();
      $result_connexion = $userModel->connexion($_POST);
      return 'Mon utilisateur est '. $result_connexion;
    }
  }

  /*
   * En tant qu'admin accés autorisé à tous les actions
   */
  public function has_access($action){
    return TRUE;
  }
}
