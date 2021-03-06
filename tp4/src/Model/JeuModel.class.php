<?php

/**
 *
 */
class JeuModel
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

    /**
     * Get the value of Nom Jeu
     *
     * @return mixed
     */
    public function getNomJeu()
    {
        return $this->nom_jeu;
    }

    /**
     * Set the value of Nom Jeu
     *
     * @param mixed nom_jeu
     *
     * @return self
     */
    public function setNomJeu($nom_jeu)
    {
        $this->nom_jeu = $nom_jeu;

        return $this;
    }

    /**
     * Get the value of Editeur
     *
     * @return mixed
     */
    public function getEditeur()
    {
        return $this->editeur;
    }

    /**
     * Set the value of Editeur
     *
     * @param mixed editeur
     *
     * @return self
     */
    public function setEditeur($editeur)
    {
        $this->editeur = $editeur;

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

}
