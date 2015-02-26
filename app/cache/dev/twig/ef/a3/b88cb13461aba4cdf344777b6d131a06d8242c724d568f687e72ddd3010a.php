<?php

/* :modulesUsed:panier.html.twig */
class __TwigTemplate_efa3b88cb13461aba4cdf344777b6d131a06d8242c724d568f687e72ddd3010a extends Twig_Template
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
        echo "<div class=\"span3\">
    <div class=\"well\">
        <div class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-shopping-cart\"></i>
                1 personne - 1500 €
                <b class=\"caret\"></b></a>
            </a>
            <div class=\"dropdown-menu well\" role=\"menu\" aria-labelledby=\"dLabel\">
                <p>Item x 1 <span class=\"pull-right\">150 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">150 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">150 €</span></p>
                <a href=\"panier.php\" class=\"btn btn-primary\">Mon Panier</a>
            </div>
        </div>
    </div>

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"connexion.php\">Se connecter</a>
            </li>
            <li>
                <a href=\"inscription.php\">S'inscrire</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos Danseuses</li>
            <li class=\"active\">
                <a href=\"index.php\">Danseuses</a>
            </li>
            
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return ":modulesUsed:panier.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
