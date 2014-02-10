<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/blog')) {
            // kitablog_accueil
            if (preg_match('#^/blog(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'kitablog_accueil')), array (  '_controller' => 'Kita\\BlogBundle\\Controller\\BlogController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // kitablog_voir
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'kitablog_voir')), array (  '_controller' => 'Kita\\BlogBundle\\Controller\\BlogController::voirAction',));
                }

                // kitablog_ajouter
                if ($pathinfo === '/blog/ajouter') {
                    return array (  '_controller' => 'Kita\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'kitablog_ajouter',);
                }

            }

            // kitablog_supprimer
            if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'kitablog_supprimer')), array (  '_controller' => 'Kita\\BlogBundle\\Controller\\BlogController::supprimerAction',));
            }

            // kitablog_modifier
            if (0 === strpos($pathinfo, '/blog/modifier') && preg_match('#^/blog/modifier/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'kitablog_modifier')), array (  '_controller' => 'Kita\\BlogBundle\\Controller\\BlogController::modifierAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
