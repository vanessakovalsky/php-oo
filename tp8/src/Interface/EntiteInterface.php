<?php

/**
 *
 */
interface Entite
{
  public function ajouter(stdClass $objet, PDO $db);

  public function voir($id, PDO $db);

  public function modifier();

  public function supprimer();

  public function lister(PDO $db);
}
