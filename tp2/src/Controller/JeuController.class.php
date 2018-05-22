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

  public function AjoutJeu(){
    // Enregistrement des données en base de données
    return 'Mon jeu a été ajouté !';
  }

  public function SuppressionJeu(){

  }

  public function ModificationJeu(){

  }

  public function ListeJeu(){
    return 'Liste des jeux';
  }

}
