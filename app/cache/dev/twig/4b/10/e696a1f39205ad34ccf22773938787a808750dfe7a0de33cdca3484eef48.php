<?php

/* KitaBlogBundle:Kita:ajouter.html.twig */
class __TwigTemplate_4b10e696a1f39205ad34ccf22773938787a808750dfe7a0de33cdca3484eef48 extends Twig_Template
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
        echo "    Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_kitablog_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <h2>Ajouter un article</h2>
    
    ";
        // line 13
        $this->env->loadTemplate("KitaBlogBundle:Kita:formulaire.html.twig")->display($context);
        // line 14
        echo "    
    <p>
        Attention: cet article sera ajouté directement sur la page d'accueil après validation du formulaire.
    </p>

";
    }

    public function getTemplateName()
    {
        return "KitaBlogBundle:Kita:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  47 => 13,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
