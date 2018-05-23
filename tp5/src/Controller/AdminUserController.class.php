<?php

/**
 *
 */
class AdminUser extends Utilisateur
{

  function __construct()
  {
    // code...
  }

  /*
   * En tant qu'admin accés autorisé à tous les actions
   */
  public function has_access($action){
    return TRUE;
  }
}
