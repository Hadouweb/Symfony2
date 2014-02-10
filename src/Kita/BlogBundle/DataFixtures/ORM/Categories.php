<?php
// src/Kita/BlogBundle/DataFixtures/ORM/Categories.php

namespace Kita\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kita\BlogBundle\Entity\Categorie;

class Categories implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $noms = array('Symfony2', 'Doctrine2', 'Tutoriel', 'Évènement');

    foreach($noms as $i => $nom)
    {
      // On crée la catégorie
      $listeCategories[$i] = new Categorie();
      $listeCategories[$i]->setNom($nom);

      // On la persiste
      $manager->persist($listeCategories[$i]);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}