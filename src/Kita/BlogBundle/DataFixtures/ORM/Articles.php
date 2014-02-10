<?php
// src/Kita/BlogBundle/DataFixtures/ORM/Article.php

namespace Kita\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kita\BlogBundle\Entity\Article;

class Articles implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {

    $articles = array(
                    $article1 = array(
                        'auteur'    => 'Nicolas',
                        'titre'     => 'Article1',
                        'contenu'   => 'Ceci est un contenu de demo'
                    ),
                    $article2 = array(
                        'auteur'    => 'Kenshin',
                        'titre'     => 'Article2',
                        'contenu'   => 'Ceci est un contenu de demo de l\'article à Kenshin'
                    ),
                    $article3 = array(
                        'auteur'    => 'Kengo',
                        'titre'     => 'Article3',
                        'contenu'   => 'Bla bla blablabla... bla bla'
                    ),
                    $article4 = array(
                        'auteur'    => 'Kitano',
                        'titre'     => 'Article4',
                        'contenu'   => 'Kitano est le Héros du manga SunkenRock.'
                    ),
                    $article5 = array(
                        'auteur'    => 'Nicolas',
                        'titre'     => 'Article5',
                        'contenu'   => 'Ceci est un contenu de demo'
                    ),
                    $article6 = array(
                        'auteur'    => 'Kenshin',
                        'titre'     => 'Article6',
                        'contenu'   => 'Ceci est un contenu de demo de l\'article à Kenshin'
                    ),
                    $article7 = array(
                        'auteur'    => 'Kengo',
                        'titre'     => 'Article7',
                        'contenu'   => 'Bla bla blablabla... bla bla'
                    ),
                    $article8 = array(
                        'auteur'    => 'Kitano',
                        'titre'     => 'Article8',
                        'contenu'   => 'Kitano est le Héros du manga SunkenRock.'
                    )
                );
  
    foreach($articles as $i => $article)
    {
        
        $listeArticles[$i] = new Article();
              
        $listeArticles[$i]->setTitre($article['titre']);
        $listeArticles[$i]->setAuteur($article['auteur']);
        $listeArticles[$i]->setContenu($article['contenu']);
        
        $manager->persist($listeArticles[$i]);

    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}