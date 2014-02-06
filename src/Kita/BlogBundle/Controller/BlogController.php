<?php

namespace Kita\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Kita\BlogBundle\Entity\Article;

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
        
        $em = $this->getDoctrine()->getManager();
        
        $article1 = new Article;
        $article1->setTitre('Mon dernier weekend');
        $article1->setAuteur('Bibi');
        $article1->setContenu("C'était vraiment super et on s'est bien amusé.");
        
        $em->persist($article1);     
        
        $em->flush();
        
        if ($this->getRequest()->getMethod() == 'POST') {
          $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
          return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => $article->getId())) );
        }
       
        return $this->render('KitaBlogBundle:Kita:ajouter.html.twig');
    }
    
    public function voirAction($id)
    {
        
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('KitaBlogBundle:Article');
        
        $article = $repository->find($id);
        
        if($article === null)
        {
            throw $this->createNotFoundException('Article[id='.$id.'} inexistant.');
        }
        
        return $this->render('KitaBlogBundle:Kita:voir.html.twig', array(
            'article' => $article
        ));
        
    }
    
    public function modifierAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();      
        $article = $em->getRepository('KitaBlogBundle:Article');
        
        $article = $article->find($id);
        
        $article->setAuteur('Nicolas');
             
        $em->persist($article);
        
        $em->flush();     
                
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
