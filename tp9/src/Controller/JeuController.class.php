<?php

namespace Controller;

use Model\JeuModel;

/**
 *
 */
class JeuController
{

  public function AjoutJeu($values = null){
    // Envoyer un formulaire
    if(empty($values)){
      $formulaire = include_once('./src/View/formulaire_ajout_jeu.html.php');
      return $formulaire;
    }
    //traiter le formulaire
    else{
      $jeuModel = new JeuModel();
      $jeuModel->setNomJeu($values['nom_jeu']);
      return 'Mon jeu a été ajouté !'.$jeuModel->getNomJeu();
    }
  }

  public function SuppressionJeu(Jeu $jeu){

  }

  public function ModificationJeu(Jeu $jeu){

  }

  public function ListeJeu(){
    $jeuModel = new JeuModel();
    $reponse_voir_jeu = $jeuModel->lister();
    $content = include_once('./src/View/liste_jeu.html.php');
    return $content;
  }

  public function VoirJeu($jid){
    $jeuModel = new JeuModel();
    $jeu = $jeuModel->voir($jid);
    $content = include_once('./src/View/voir_jeu.html.php');
    return $content;
  }
}
