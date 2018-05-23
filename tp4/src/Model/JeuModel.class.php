<?php

/**
 *
 */
class JeuModel
{

  function __construct(PDO $db)
  {
    if(empty($db)){
      return FALSE;
    }
  }

  public function EnregistrerJeu(Jeu $jeu, PDO $db){

    $requete = 'INSERT INTO jeu ';

  }
}
