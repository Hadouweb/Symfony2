<?php

/* KitaBlogBundle:Kita:article.html.twig */
class __TwigTemplate_cc607d1fe1a900740b5c176c46e123e9cd85dbb1a9d22dd3230c72920fea31f3 extends Twig_Template
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
        // line 1
        $context["accueil"] = ((array_key_exists("accueil", $context)) ? (_twig_default_filter($this->getContext($context, "accueil"), false)) : (false));
        // line 2
        echo "
<h2>
  ";
        // line 4
        if ((!(null === $this->getAttribute($this->getContext($context, "article"), "image")))) {
            // line 5
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "image"), "url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "image"), "alt"), "html", null, true);
            echo "\" />
  ";
        }
        // line 7
        echo "
  ";
        // line 8
        if ($this->getContext($context, "accueil")) {
            // line 9
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kitablog_voir", array("slug" => $this->getAttribute($this->getContext($context, "article"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a>
  ";
        } else {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "
  ";
        }
        // line 13
        echo "</h2>

<i>Le ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "date"), "d/m/Y"), "html", null, true);
        echo ", par ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "auteur"), "html", null, true);
        echo ".</i>

<div class=\"well\">
  ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "contenu"), "html", null, true);
        echo "
</div>

";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "categories"), "count") > 0)) {
            // line 22
            echo "  <div class=\"well well-small\">
    <p><i>
      Catégories :
      ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "article"), "categories"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 26
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "nom"), "html", null, true);
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
                // line 27
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    </i></p>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "KitaBlogBundle:Kita:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 28,  102 => 27,  96 => 26,  79 => 25,  74 => 22,  72 => 21,  66 => 18,  58 => 15,  54 => 13,  48 => 11,  40 => 9,  38 => 8,  35 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
