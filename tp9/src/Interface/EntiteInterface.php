<?php

/**
 *
 */
interface EntiteInterface
{
  public function ajouter(stdClass $objet);

  public function voir($id);

  public function modifier();

  public function supprimer();

  public function lister();
}
