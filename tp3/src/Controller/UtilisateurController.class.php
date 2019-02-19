<?php

/**
 *
 */
class UtilisateurController
{

  public function AjoutUtilisateur($values = null){
    if(empty($values)){
      $formulaire = include_once('./src/View/formulaire_ajout_utilisateur.html.php');
      return $formulaire;
    }
    //traiter le formulaire
    else{
      include_once('./src/Model/UtilisateurModel.class.php');
      $utilisateur = new UtilisateurModel();
      $utilisateur->setNom($values['nom']);
      return 'Mon Utilisateur a été ajouté ! '.$utilisateur->getNom();
    }
  }

  public function SuppressionUtilisateur(){

  }

  public function ModificationUtilisateur($uid, $values = NULL){
    return 'UID de l\'utilisateur à modifier'. $uid;
  }

}
