<?php

namespace Kita\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

Class BlogController extends Controller 
{
    
    public function indexAction()
    {
        
        $antispam = $this->container->get('kita_blog.antispam');
        
        $text = "ok@xwcxwc.fr,  ok@xwcxwc.fr, ok@xwcxwc.fr";
        
        if($antispam->isSpam($text))
        {
            throw new \Exception('Votre message a été détecté comme spam !');
        }
        
        $articles = array(
            array(
                'titre' => 'Mon week a Phi Phi Island !',
                'id' => 1,
                'auteur' =>'winzou',
                'contenu' => 'Ce weekend était trop bien..',
                'date'  => new \DateTime())
        );
        
        return $this->render('KitaBlogBundle:Kita:index.html.twig', array(
            'articles' => $articles
        ));
        
        
    }
    
    public function ajouterAction()
    {
        if ($this->get('request')->getMethod() == 'POST' )
        {
            $this->get('session')->getFlashBaf()->add('notice', 'Article bien enregistré');
            
            return $this->redirect( $this->generateUrl('kitablog_voir', array('id' => 5)) );
        }
        
        return $this->render('KitaBlogBundle:Kita:ajouter.html.twig');
    }
    
    public function voirAction($id)
    {
        
        $article = array(
            'id'        => 1,
            'titre'     => 'Mon weekend a Phi Phi Island !',
            'auteur'    => 'Winzou',
            'contenu'   => 'Ce weekend était ytrop bien. blabla...',
            'date'      => new \Datetime()
        );
        
        return $this->render('KitaBlogBundle:Kita:voir.html.twig', array(
            'article' => $article
        ));
        
    }
    
    public function modifierAction($id)
    {
        
        $article = array(
            'id'        => 1,
            'titre'     => 'Mon weekend a Phi Phi Island !',
            'auteur'    => 'Winzou',
            'Contenu'   => 'Ce weekend était trop bien. Blabla...',
            'date'      => new \Datetime()
        );
                
        return $this->render('KitaBlogBundle:Kita:modifier.html.twig', array(
            'article' => $article
        ));
        
    }
    
    public function supprimerAction($id)
    {
        return $this->render('KitaBlogBundle:Kita:supprimer.html.twig', array(
            'id' => $id
        ));
    }
    
    public function menuAction($nombre)
    {
        
        $liste = array(
            array('id' => 2, 'titre' => 'Mon dernier weekend !'),
            array('id' => 5, 'titre' => 'Sortie de Symfont2.1'),
            array('id' => 9, 'titre' => 'Petit test')
        );
        
        return $this->render('KitaBlogBundle:Kita:menu.html.twig', array(
            'liste_articles' => $liste
        ));
        
    }

}
?>
