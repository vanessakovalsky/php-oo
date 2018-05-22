<?php

/**
 *
 */
class Jeu
{
  private $nom_jeu;
  private $editeur;

  function __construct()
  {
    // code...
  }

  public function AjoutJeu($values = null){
    // Envoyer un formulaire
    if(empty($values)){
      $formulaire = include_once('./src/View/formulaire_ajout_jeu.html.php');
      return $formulaire;
    }
    //traiter le formulaire
    else{
      $this->nom_jeu = $values['nom_jeu'];
      return 'Mon jeu a été ajouté !';
    }
  }

  public function SuppressionJeu(){

  }

  public function ModificationJeu(){

  }

public function ListeJeu(){
  
}
}
