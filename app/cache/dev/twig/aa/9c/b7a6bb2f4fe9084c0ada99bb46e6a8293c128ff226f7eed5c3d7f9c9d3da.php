<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_aa9cb7a6bb2f4fe9084c0ada99bb46e6a8293c128ff226f7eed5c3d7f9c9d3da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "

<div class=\"row\">
        <div class=\"span12\">
            <h2>Connexion</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Vous n'etes pas encore inscrit ?</h4>
                        <em>
                            nous vous invitons à vous inscrire<br />
                            afin de passer de proceder aux visionnage des profiles.
                        </em>
                        <br /><br />
                        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"bouton\">S'inscrire</a>
                        
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <h4>Connexion</h4>
                        <form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t\t\t\t    <label for=\"username\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

\t\t\t\t\t\t    <label for=\"password\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t    <input class=\"bouton\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</form>
                    </div>
                    <div class=\"span10\">
                        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 43,  97 => 39,  90 => 35,  85 => 33,  81 => 32,  76 => 30,  72 => 29,  63 => 23,  47 => 9,  41 => 7,  39 => 6,  36 => 5,  11 => 1,);
    }
}
