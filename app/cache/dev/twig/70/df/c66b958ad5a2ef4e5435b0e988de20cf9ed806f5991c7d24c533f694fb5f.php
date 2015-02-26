<?php

/* UtilisateursBundle:Default/modulesUsed:userConnected.html.twig */
class __TwigTemplate_70dfc66b958ad5a2ef4e5435b0e988de20cf9ed806f5991c7d24c533f694fb5f extends Twig_Template
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
                <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Changer mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a>
            </li>
            <li>
                <a href=\"lieux.php\">Lieux de la représentation</a>
            </li>
            <li>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">deconnexion</a>
            </li>
        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default/modulesUsed:userConnected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 16,  36 => 10,  30 => 7,  24 => 4,  19 => 1,);
    }
}
