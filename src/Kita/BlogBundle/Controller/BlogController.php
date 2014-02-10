<?php

namespace Kita\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Kita\BlogBundle\Entity\Article;
use Kita\BlogBundle\Entity\Image;
use Kita\BlogBundle\Entity\Commentaire;
use Kita\BlogBundle\Entity\Categorie;
use Kita\BlogBundle\Entity\ArticleCompetence;

Class BlogController extends Controller 
{
    
    public function indexAction($page)
    {

        if($page < 1)
        {
            throw $this->createNotFoundException('  Page inexistante (page = '.$page.')');
        }
        
        $em = $this->getDoctrine()->getManager();
        
        $article = $em->getRepository('KitaBlogBundle:Article');
        
        $articles = $article->getArticles(3, $page);
        
        return $this->render('KitaBlogBundle:Kita:index.html.twig', array(
            'articles'      => $articles,
            'page'          => $page,
            'nombrePage'    => ceil(count($articles)/3)
        ));
          
    }
    
    public function voirAction(Article $article)
    {

        $em = $this->getDoctrine()->getManager();
        
        $listeArticleCompetence = $em->getRepository('KitaBlogBundle:ArticleCompetence')
                                     ->findByArticle($article->getSlug());
        
        return $this->render('KitaBlogBundle:Kita:voir.html.twig', array(
            'article' => $article,
            'listeArticleCompetence' => $listeArticleCompetence
        ));
        
    }
    
    public function ajouterAction()
    {
        
        $article = new Article();
        
        $form = $this->createFormBuilder($article)
                             ->add('date',           'date')
                             ->add('titre',          'text')
                             ->add('contenu',        'textarea')
                             ->add('auteur',         'text')
                             ->add('publication',    'checkbox', array('required' => false))
                             ->getForm();
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST' ) {
            
            $form->bind($request);
            
            if($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();
                
                return $this->redirect($this->generateUrl('kitablog_voir', array('slug' => $article->getSlug())));  
            }
            
        }
        
        return $this->render('KitaBlogBundle:Kita:ajouter.html.twig', array(
            'form' => $form->createView(),
        ));

    }
    
    public function modifierAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $article = $em->getRepository('KitaBlogBundle:Article')->find($id);
        
        $form = $this->createFormBuilder($article)
                             ->add('date',           'date')
                             ->add('titre',          'text')
                             ->add('contenu',        'textarea')
                             ->add('auteur',         'text')
                             ->add('publication',    'checkbox', array('required' => false))
                             ->getForm();
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST' ) {
            
            $form->bind($request);
            
            if($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();
                
                return $this->redirect($this->generateUrl('kitablog_voir', array('slug' => $article->getSlug())));  
            }
            
        }
        
        if($article === null){
            throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
        }    

        return $this->render('KitaBlogBundle:Kita:modifier.html.twig', array(
            'article' => $article, 
            'form' => $form->createView()
        ));
        
    }
    
    public function supprimerAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $article = $em->getRepository('KitaBlogBundle:Article')->find($id);
        
        if($article === null){
            throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
        }
        
        if ( $this->get('request')->getMethod() === 'POST' ){
            
            $this->get('session')->getFlashBag()->add('info', 'Article bien supprimé');
            
            return $this->redirect( $this->generateUrl('kitablog_accueil') );
        }
        
        return $this->render('KitaBlogBundle:Blog:supprimer.html.twig', array(
            'article' => $article
        ));
        
    }
    
    public function menuAction($nombre)
    {
        $liste = $this->getDoctrine()->getManager()
                      ->getRepository('KitaBlogBundle:Article')
                      ->findBy(
                                array(),
                                array('date' => 'desc'),
                                $nombre,
                                0
                              );
        
        return $this->render('KitaBlogBundle:Kita:menu.html.twig', array(
            'liste_articles' => $liste
        ));
        
    }
    
    public function testAction()
    {
        $article = new Article();
        $article->setTitre("L'histoire d'un bon weekend !");
        $article->setDateEdition(new \Datetime());
        $article->setAuteur('Nicolas');
        $article->setContenu('Balb alb alb la...');
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();
        
        return new Response('Slug généré : '.$article->getSlug());
    }

}
?>
