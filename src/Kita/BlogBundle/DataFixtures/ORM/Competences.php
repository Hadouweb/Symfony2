<?php
// src/Kita/BlogBundle/DataFixtures/ORM/Categories.php

namespace Kita\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kita\BlogBundle\Entity\Competence;

class Competences implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $noms = array('Javascript', 'Symfony2', 'jQuery', 'PHP');

    foreach($noms as $i => $nom)
    {
      // On crée la catégorie
      $listeCompetence[$i] = new Competence();
      $listeCompetence[$i]->setNom($nom);

      // On la persiste
      $manager->persist($listeCompetence[$i]);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}