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
    $requete_preparee = $db->prepare($requete);
    $result = $requete_preparee->execute(['nom_jeu' => $nom_jeu, 'editeur' => $editeur, 'annee' => $annee_sortie, 'descriptif' => $descriptif ]);
    return $result;
  }

  public function VoirJeu($id, PDO $db){
    $requete = 'SELECT * FROM jeux WHERE id = :id';
    $requete_preparee = $db->prepare($requete);
    $result = $requete_preparee->execute(['id' => $id]);
    $tableau_jeu = $requete_preparee->fetch(PDO::FETCH_ASSOC);
    $objet_jeu = self::transformArrayToObject($tableau_jeu);
    return $objet_jeu;
  }

  private function transformArrayToObject($tableau_jeu){
    $jeu = new Jeu();
    $jeu->setNomJeu($tableau_jeu['nom_jeu']);
    return $jeu;
  }
}
