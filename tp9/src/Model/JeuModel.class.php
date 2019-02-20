<?php

namespace Model;

use GuzzleHttp\Client;
use EntiteInterface\EntiteInterface;

/**
 *
 */
class JeuModel implements EntiteInterface
{

private $name;
private $editor;
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

    /**
     * Get the value of Nom Jeu
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Nom Jeu
     *
     * @param mixed nom_jeu
     *
     * @return self
     */
    public function setName($nom_jeu)
    {
        $this->name = $nom_jeu;

        return $this;
    }

    /**
     * Get the value of Editeur
     *
     * @return mixed
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set the value of Editeur
     *
     * @param mixed editeur
     *
     * @return self
     */
    public function setEditor($editeur)
    {
        $this->editor = $editeur;

        return $this;
    }

    /**
     * Get the value of Annee Sortie
     *
     * @return mixed
     */
    public function getAnneeSortie()
    {
        return $this->annee_sortie;
    }

    /**
     * Set the value of Annee Sortie
     *
     * @param mixed annee_sortie
     *
     * @return self
     */
    public function setAnneeSortie($annee_sortie)
    {
        $this->annee_sortie = $annee_sortie;

        return $this;
    }

    /**
     * Get the value of Photos
     *
     * @return mixed
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set the value of Photos
     *
     * @param mixed photos
     *
     * @return self
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * Get the value of Descriptif
     *
     * @return mixed
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set the value of Descriptif
     *
     * @param mixed descriptif
     *
     * @return self
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get the value of Categorie
     *
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of Categorie
     *
     * @param mixed categorie
     *
     * @return self
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get the value of Duree
     *
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of Duree
     *
     * @param mixed duree
     *
     * @return self
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of Nombre Joueur
     *
     * @return mixed
     */
    public function getNombreJoueur()
    {
        return $this->nombre_joueur;
    }

    /**
     * Set the value of Nombre Joueur
     *
     * @param mixed nombre_joueur
     *
     * @return self
     */
    public function setNombreJoueur($nombre_joueur)
    {
        $this->nombre_joueur = $nombre_joueur;

        return $this;
    }

    public function voir($id){
      $client = new Client([
          // Base URI is used with relative requests
          'base_uri' => 'http://virtserver.swaggerhub.com',
          // You can set any number of default request options.
          'timeout'  => 2.0,
      ]);
      $reponse = $client->request('GET','/vanessakovalsky/BoardGames/1.0.0/boardgame/'.$id);
      $jeu_data = json_decode($reponse->getBody()->getContents(), true);
      $jeu = new JeuModel($jeu_data);
      return $jeu;
    }

    public function voirJeuSQL($id, PDO $db){
     $requete = 'SELECT * FROM jeux WHERE id = :id';
     $requete_preparee = $db->prepare($requete);
     $result = $requete_preparee->execute(['id' => $id]);
     $tableau_jeu = $requete_preparee->fetch(PDO::FETCH_ASSOC);
     $objet_jeu = self::transformArrayToObject($tableau_jeu);
     return $objet_jeu;
   }

   private function transformArrayToObject($tableau_jeu){
      $jeu = new JeuModel();
      $jeu->setId($tableau_jeu['id']);
      $jeu->setName($tableau_jeu['nom_jeu']);
      $jeu->setEditor($tableau_jeu['editeur']);
      $jeu->setAnneeSortie($tableau_jeu['annee']);
      $jeu->setPhotos($tableau_jeu['photo']);
      $jeu->setDescriptif($tableau_jeu['descriptif']);
      $jeu->setCategorie($tableau_jeu['categorie']);
      $jeu->setDuree($tableau_jeu['duree']);
      $jeu->setNombreJoueur($tableau_jeu['nombre_joueur']);
      return $jeu;
    }

    public function lister(){
      $client = new Client([
          // Base URI is used with relative requests
          'base_uri' => 'http://virtserver.swaggerhub.com',
          // You can set any number of default request options.
          'timeout'  => 2.0,
      ]);
      $reponse = $client->request('GET','/vanessakovalsky/BoardGames/1.0.0/boardgame/findByStatus');
      $jeu_data = json_decode($reponse->getBody()->getContents(), true);
      $table_jeu = [];
      foreach($jeu_data as $jeu_single){
        $table_jeu[] =  new JeuModel($jeu_single);
      }
      return $table_jeu;
    }

    public function ajouter(object $objet){
    }

    public function modifier(){
    }

    public function supprimer(){
    }


}
