<?php
namespace Controller;

use Model\JeuModel;
use \PDO;

/**
 *
 */
class JeuController
{
  private $id;
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

  public function AjoutJeu(JeuController$jeu, PDO $db){
    // Envoyer un formulaire
    if(empty($jeu->nom_jeu)){
      $formulaire = include_once('./src/View/formulaire_ajout_jeu.html.php');
      return $formulaire;
    }
    //traiter le formulaire
    else{
      //On appel l'insertion en base
      $repo_jeu = new JeuModel($db);
      $reponse_ajout_jeu = $repo_jeu->ajouter($jeu, $db);
      return $reponse_ajout_jeu.'Mon jeu a été ajouté !';
    }
  }

  public function VoirJeu(int $id, PDO $db){
    $repo_jeu = new JeuModel($db);
    $jeu = $repo_jeu->voir($id, $db);
    $liste = include_once('./src/View/voir_jeu.html.php');
    return $liste;
  }

  public function SuppressionJeu(){

  }

  public function ModificationJeu(){

  }

  public function ListeJeu(PDO $db){
    $repo_jeu = new JeuModel($db);
    $reponse_voir_jeu = $repo_jeu->lister($db);
    $liste = include_once('./src/View/liste_jeu.html.php');
    return $liste;
  }

  public function getId(){
    return $this->id;
  }

  public function getNomJeu(){
    return $this->nom_jeu;
  }

  public function getNomJeuLien(){
    $lien_jeu = '<a href="index.php?actions=VoirJeu&id='.$this->getId().'">'.$this->getNomJeu().'</a>';
    return $lien_jeu;
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

  public function getCategorie(){
    return $this->categorie;
  }

  public function getDuree(){
    return $this->duree;
  }

  public function getNombreJoueur(){
    return $this->nombre_joueur;
  }

  public function setId($id){
    $this->id = $id;
  }

  public function setNomJeu($nom){
    $this->nom_jeu = $nom;
  }

  public function setEditeur($editeur){
    $this->editeur = $editeur;
  }

  public function setAnneeSortie($annee_sortie){
    $this->annee_sortie = $annee_sortie;
  }

  public function setPhotos($photos){
    $this->photos = $photos;
  }

  public function setDescriptif($descriptif){
    $this->descriptif = $descriptif;
  }

  public function setCategorie($categorie){
    $this->categorie = $categorie;
  }

  public function setDuree($duree){
    $this->duree = $duree;
  }

  public function setNombreJoueur($nombre_joueur){
    $this->nombre_joueur = $nombre_joueur;
  }

}
