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
    $categorie = $jeu->getCategorie();
    $photos = $jeu->getPhotos();
    $duree = $jeu->getDuree();
    $nombre_joueur = $jeu->getNombreJoueur();
    $requete = "INSERT INTO `jeux` (`nom_jeu`, `editeur`, `annee`, `photo`,`descriptif`, `categorie`, `duree`, `nombre_joueur`)
    VALUES (:nom_jeu, :editeur, :annee, :photo, :descriptif, :categorie, :duree, :nombre_joueur );";
    $requete_preparee = $db->prepare($requete);
    $result = $requete_preparee->execute([
      'nom_jeu' => $nom_jeu,
      'editeur' => $editeur,
      'annee' => $annee_sortie,
      'photo' => $photos,
      'descriptif' => $descriptif,
      'categorie' => $categorie,
      'duree' => $duree,
      'nombre_joueur' => $nombre_joueur
    ]);
    var_dump($result);
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
    $jeu->setEditeur($tableau_jeu['editeur']);
    $jeu->setAnneeSortie($tableau_jeu['annee']);
    $jeu->setPhotos($tableau_jeu['photo']);
    $jeu->setDescriptif($tableau_jeu['descriptif']);
    $jeu->setCategorie($tableau_jeu['categorie']);
    $jeu->setDuree($tableau_jeu['duree']);
    $jeu->setNombreJoueur($tableau_jeu['nombre_joueur']);

    return $jeu;
  }
}
