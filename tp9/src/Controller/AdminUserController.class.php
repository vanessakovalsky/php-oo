<?php
namespace Controller;

use Session\Session;
use Model\UtilisateurModel;

/**
 *
 */

class AdminUserController extends UtilisateurController
{
  private $session;

  function __construct(Session $session)
  {
    $this->session = $session;
  }

  public static function connexion(Session $session){
    // Envoyer un formulaire
    if(empty($_POST)){
      $formulaire = include_once('./src/View/formulaire_connexion.html.php');
      return $formulaire;
    }
    //traiter le formulaire
    else{
      $userModel = new UtilisateurModel();
      $result_connexion = $userModel->connexion($_POST);
      if($result_connexion instanceOf UtilisateurModel){
        $user_array = (array) $result_connexion;
        if($session->session_exist('user_name')){
          $session->insert_value('user_name', $user_array['username']);
          $session->insert_value('user_role', $user_array['userStatus']);
        }
        else {
          $session->create_session('user_name');
          $session->insert_value('user_name', $user_array['username']);
          $session->create_session('user_role');
          $session->insert_value('user_role', $user_array['role']);
        }
        return 'Mon utilisateur est '. $result_connexion->getFirstName();
      }
      else {
        return 'Mon utilisateur est '. $result_connexion;
      }
    }
  }

  public static function deconnexion(Session $session){
    if($session->session_exist('user_name')){
      $session->remove_session('user_name');
      $session->remove_session('user_role');
    }
  }

  /*
   * En tant qu'admin accés autorisé à tous les actions
   */
  public function has_access($action){
    return TRUE;
  }
}
