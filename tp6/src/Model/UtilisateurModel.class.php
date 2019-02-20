<?php

include_once('./src/Interface/EntiteInterface.php');

/**
 *
 */
class UtilisateurModel implements EntiteInterface
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


    /**
     * Get the value of Nom
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of Nom
     *
     * @param mixed nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of Email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     * @param mixed email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of Identifant
     *
     * @return mixed
     */
    public function getIdentifant()
    {
        return $this->identifant;
    }

    /**
     * Set the value of Identifant
     *
     * @param mixed identifant
     *
     * @return self
     */
    public function setIdentifant($identifant)
    {
        $this->identifant = $identifant;

        return $this;
    }

    /**
     * Get the value of Prenom
     *
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @param mixed prenom
     *
     * @return self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of Role
     *
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of Role
     *
     * @param mixed role
     *
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of Presentation
     *
     * @return mixed
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set the value of Presentation
     *
     * @param mixed presentation
     *
     * @return self
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get the value of Avatar
     *
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set the value of Avatar
     *
     * @param mixed avatar
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get the value of Mot De Passe
     *
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->mot_de_passe;
    }

    /**
     * Set the value of Mot De Passe
     *
     * @param mixed mot_de_passe
     *
     * @return self
     */
    public function setMotDePasse($mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;

        return $this;
    }

    public function ajouter(stdClass $objet);

    public function voir($id);

    public function modifier();

    public function supprimer();

    public function lister();

}
