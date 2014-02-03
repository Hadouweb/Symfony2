<?php

/* KitaBlogBundle:Kita:menu.html.twig */
class __TwigTemplate_e94d3f07943fe5f3bbaf3062f8f13305f11470ddb8c0a07102c81be1127e6f6e extends Twig_Template
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
<h3>Les derniers articles</h3>

<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kitablog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "KitaBlogBundle:Kita:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  19 => 2,  125 => 51,  122 => 50,  120 => 49,  117 => 48,  113 => 37,  110 => 36,  103 => 11,  100 => 10,  94 => 8,  88 => 53,  86 => 48,  74 => 38,  72 => 36,  66 => 33,  56 => 29,  38 => 13,  36 => 10,  31 => 8,  23 => 2,  60 => 30,  52 => 17,  50 => 15,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  78 => 27,  71 => 23,  64 => 19,  57 => 15,  49 => 12,  45 => 11,  42 => 10,  39 => 9,  32 => 6,  29 => 7,);
    }
}
