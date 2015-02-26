<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_adc4a465b2fc9f270f29bee77c4a81df67f510bac9a9427b70f121e809c530fb extends Twig_Template
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


<div class=\"row\">
        <div class=\"span12\">
            <h2>Mot de passe perdu</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Récupération du mot de passe ?</h4>
                        <em>
                            Compléter le formulaire, ainsi votre mot de passe sera alors réinitialiser.<br /><br />
                            Une fois validé, vous devrez utiliser le nouveau mot de passe que vous aurai défini.
                        </em>
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                        <!-- pour les formulaires -->
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    
                            <div>
                                <input class=\"bouton\" type=\"submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 24,  45 => 21,  38 => 19,  19 => 2,);
    }
}
