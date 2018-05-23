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

  public function AjoutJeu(Jeu $jeu, PDO $db){
    // Envoyer un formulaire
    if(empty($jeu->nom_jeu)){
      $formulaire = include_once('./src/View/formulaire_ajout_jeu.html.php');
      return $formulaire;
    }
    //traiter le formulaire
    else{
      //On appel l'insertion en base
      include_once('./src/Model/JeuModel.class.php');
      $repo_jeu = new JeuModel($db);
      $reponse_ajout_jeu = $repo_jeu->EnregistrerJeu($jeu, $db);
      return $reponse_ajout_jeu.'Mon jeu a été ajouté !';
    }
  }

  public function SuppressionJeu(){

  }

  public function ModificationJeu(){

  }

  public function ListeJeu(){

  }

  public function getNomJeu(){
    return $this->nom_jeu;
  }

  public function getEditeur(){
    return $this->editeur;
  }

  public function getAnneeSortie(){
    return $this->annee_sortie;
  }

  public function getPhotos(){
    return $this->photos;
  }

  public function getDescriptif(){
    return $this->descriptif;
  }
  
}
