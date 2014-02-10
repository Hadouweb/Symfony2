<?php

/* KitaBlogBundle:Kita:modifier.html.twig */
class __TwigTemplate_9f260fa48f4164f5ca73b9d47dfa635d2e84c5d754c9289094af5c675855a480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KitaBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'kitablog_body' => array($this, 'block_kitablog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KitaBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_kitablog_body($context, array $blocks = array())
    {
        // line 10
        echo "    
    <h2>Modifier un article</h2>
    
    ";
        // line 13
        $this->env->loadTemplate("KitaBlogBundle:Kita:formulaire.html.twig")->display($context);
        // line 14
        echo "    
    <p>
        Vous éditez un article déjà existant,
        ne le changez pas trop pour éviter
        aux membres de ne pas comprendre
        ce qu'il se passe.
    </p>
    
    <p>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kitablog_voir", array("slug" => $this->getAttribute($this->getContext($context, "article"), "slug"))), "html", null, true);
        echo "\" class=\"btn\">
            <i class=\"icon-chevron-left\"></i>
            Retour à l'archive
        </a>
    </p>
    
";
    }

    public function getTemplateName()
    {
        return "KitaBlogBundle:Kita:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 23,  49 => 14,  47 => 13,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
