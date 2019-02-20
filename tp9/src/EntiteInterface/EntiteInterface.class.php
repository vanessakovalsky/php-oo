<?php

namespace EntiteInterface;

/**
 *
 */
interface EntiteInterface
{
  public function ajouter(object $objet);

  public function voir($id);

  public function modifier();

  public function supprimer();

  public function lister();
}
