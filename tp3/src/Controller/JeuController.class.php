<?php

/**
 *
 */
class Jeu
{
  private $nom_jeu;
  private $editeur;
  private $annee_sortie;
  private $photos;
  private $descriptif;
  private $categorie;
  private $duree;
  private $nombre_joueur;

  function __construct($data = array())
  {
    if ($data) {
      foreach ($data as $key => $value) {
        $this->$key = $value;
      }
    }
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

  public function SuppressionJeu(Jeu $jeu){

  }

  public function ModificationJeu(Jeu $jeu){

  }

  public function ListeJeu(){

  }

  public function VoirJeu(Jeu $jeu){

  }
}
