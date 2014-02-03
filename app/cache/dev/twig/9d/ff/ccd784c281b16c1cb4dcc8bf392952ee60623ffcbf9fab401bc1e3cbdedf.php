<?php

/* KitaBlogBundle::layout.html.twig */
class __TwigTemplate_9dffccd784c281b16c1cb4dcc8bf392952ee60623ffcbf9fab401bc1e3cbdedf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'kitablog_body' => array($this, 'block_kitablog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    
    <h1>Blog</h1>
    
    <hr>
    
    ";
        // line 15
        $this->displayBlock('kitablog_body', $context, $blocks);
        // line 17
        echo "    
";
    }

    // line 15
    public function block_kitablog_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
    }

    public function getTemplateName()
    {
        return "KitaBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  52 => 17,  50 => 15,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  78 => 27,  71 => 23,  64 => 19,  57 => 15,  49 => 12,  45 => 11,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
