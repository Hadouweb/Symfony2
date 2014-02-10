<?php

/* KitaBlogBundle:Kita:formulaire.html.twig */
class __TwigTemplate_f45b6a13ac1c1dc39b7bd9672fb18c96e31e430c0a67743b82007507cd1f837b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<h3>Formulaire d'article</h3>

    <div class=\"well\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("kitablog_ajouter");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">

        ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        <div>
          ";
        // line 13
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'label', array("label" => "Titre de l'article"));
        echo "

          ";
        // line 16
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'errors');
        echo "

          ";
        // line 19
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'widget');
        echo "
        </div>

        ";
        // line 23
        echo "        <div>
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'label', array("label" => "Contenu de l'article"));
        echo "
          ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'errors');
        echo "
          ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'widget');
        echo "
        </div>

        ";
        // line 33
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
            
        <br />
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Envoyer\" />
            
        </form>
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "KitaBlogBundle:Kita:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 33,  69 => 26,  65 => 25,  61 => 24,  58 => 23,  51 => 19,  45 => 16,  39 => 13,  32 => 9,  25 => 6,  19 => 2,);
    }
}
