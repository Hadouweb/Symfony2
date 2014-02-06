<?php

/* KitaBlogBundle:Kita:voir.html.twig */
class __TwigTemplate_db4389e102c890aa88ff71217d50d24da16068777f86ea18c0ae79a432fab904 extends Twig_Template
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
        echo "    Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_kitablog_body($context, array $blocks = array())
    {
        // line 10
        echo "    
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
        echo "</h2>
    <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "auteur"), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "date"), "d/m/Y"), "html", null, true);
        echo "</i>
    
    <div class=\"well\">
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "contenu"), "html", null, true);
        echo "
    </div>
    
    <p>
        <a rhef=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("kitablog_accueil");
        echo "\" class=\"btn\">
            <i class=\"icont-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kitablog_modifier", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
            <i class=\"icont-edit\"></i>
            Modifier l'article
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kitablog_supprimer", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
            <i class=\"icon-trash\"></i>
            Supprimer l'article
        </a>
    </p>
    
";
    }

    public function getTemplateName()
    {
        return "KitaBlogBundle:Kita:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  71 => 23,  64 => 19,  57 => 15,  49 => 12,  45 => 11,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
