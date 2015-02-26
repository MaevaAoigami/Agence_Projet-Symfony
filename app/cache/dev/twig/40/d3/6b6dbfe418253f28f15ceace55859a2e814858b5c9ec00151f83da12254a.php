<?php

/* AgenceBundle:Default:test.html.twig */
class __TwigTemplate_40d36b6dbfe418253f28f15ceace55859a2e814858b5c9ec00151f83da12254a extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["danseuses"]) ? $context["danseuses"] : $this->getContext($context, "danseuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["danseuse"]) {
            // line 2
            echo "<section>
<ul>
\t<li>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["danseuse"], "categorie", array()), "html", null, true);
            echo "</li>
\t<li>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["danseuse"], "nom", array()), "html", null, true);
            echo "</li>
\t<li>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["danseuse"], "description", array()), "html", null, true);
            echo "</li>
\t<li>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["danseuse"], "image", array()), "html", null, true);
            echo "</li>
\t<li>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["danseuse"], "prix", array()), "html", null, true);
            echo "</li>
\t<li>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["danseuse"], "tva", array()), "html", null, true);
            echo "</li>
\t<li>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["danseuse"], "disponible", array()), "html", null, true);
            echo "</li>
</ul>
\t
</section>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['danseuse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t";
    }

    public function getTemplateName()
    {
        return "AgenceBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 2,  19 => 1,);
    }
}
