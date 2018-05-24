<?php

namespace Controller;

/**
 *
 */
abstract class UtilisateurController
{
  protected $nom;
  protected $email;
  protected $identifant;
  protected $prenom;
  protected $role;
  protected $presentation;
  protected $avatar;
  protected $mot_de_passe;

  function __construct($data = array())
  {
    if ($data) {
      foreach ($data as $key => $value) {
        $this->$key = $value;
      }
    }
  }

  public function AjoutUtilisateur($values = null){
    if(empty($values)){
      $formulaire = include_once('./src/View/formulaire_ajout_utilisateur.html.php');
      return $formulaire;
    }
    //traiter le formulaire
    else{
      //$this->nom = $values['nom'];
      return 'Mon Utilisateur a été ajouté !';
    }
  }

  public function SuppressionUtilisateur(){

  }

  public function ModificationUtilisateur(){

  }

  abstract function has_access($actions);

}
