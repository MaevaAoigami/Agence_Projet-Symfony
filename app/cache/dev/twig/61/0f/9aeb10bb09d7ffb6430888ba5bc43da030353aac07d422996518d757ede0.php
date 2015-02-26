<?php

/* AgenceBundle:Default/produits/layout:produits.html.twig */
class __TwigTemplate_610f9aeb10bb09d7ffb6430888ba5bc43da030353aac07d422996518d757ede0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout/layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"container\">
    <div class=\"row\">
\t<div class=\"span3\">
        ";
        // line 8
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        echo " 
    </div>

        <div class=\"span9\">
            <ul class=\"thumbnails\">
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 14
            echo "                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/balerine.jpg"), "html", null, true);
            echo "\" alt=\"Balerine\" width=\"300\" height=\"300\">
                        <div class=\"caption\">
                            <h4>Nom de la Danseuse</h4>

                            <a class=\"bouton\" href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("presentation");
            echo "\">Plus d'infos</a>
                            <a class=\"bouton\" href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\">Ajouter au panier</a>
                        </div>
                    </div>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </ul>

            <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AgenceBundle:Default/produits/layout:produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  72 => 21,  68 => 20,  61 => 16,  57 => 14,  53 => 13,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
