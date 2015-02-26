<?php

/* UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig */
class __TwigTemplate_bd8ac3a14fb1e10274cf2437b6e4da7ff8efbbd0225b405d3f1d4b8ecc1d873d extends Twig_Template
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
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"connexion.php\">Se connecter</a>
        </li>
        <li>
            <a href=\"inscription.php\">S'inscrire</a>
        </li>    
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
