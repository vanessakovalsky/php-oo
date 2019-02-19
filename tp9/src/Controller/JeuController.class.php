<?php

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
      include_once('./src/Model/JeuModel.class.php');
      $jeuModel = new JeuModel();
      $jeuModel->setNomJeu($values['nom_jeu']);
      $jeuModel->ajouter();
      return 'Mon jeu a été ajouté !'.$jeuModel->getNomJeu();
    }
  }

  public function SuppressionJeu(Jeu $jeu){

  }

  public function ModificationJeu(Jeu $jeu){

  }

  public function ListeJeu(){

  }

  public function VoirJeu(Jeu $jeu){

  }
}
