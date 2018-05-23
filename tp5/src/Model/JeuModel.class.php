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
    $nom_jeu =  $jeu->getNomJeu();
    $editeur = $jeu->getEditeur();
    $annee_sortie = $jeu->getAnneeSortie();
    $descriptif = $jeu->getDescriptif();
    $requete = "INSERT INTO `jeux` (`nom_jeu`, `editeur`, `annee`, `descriptif`) VALUES (:nom_jeu, :editeur, :annee, :descriptif);";
    $requete = $db->prepare($requete);
    $result = $requete->execute(['nom_jeu' => $nom_jeu, 'editeur' => $editeur, 'annee' => $annee_sortie, 'descriptif' => $descriptif ]);
    return $result;
  }
}
