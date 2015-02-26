<?php

/* ::layout/nav.html.twig */
class __TwigTemplate_fdc1e47c75c3c347c42256f8b9d90213c74269557b1f91ad386666e518887589 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-inverse\">
<div class=\"container\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" title=\"logo\"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Accueil <span class=\"sr-only\"></span></a></li>
        <li><a href=\"#\">Danseuses</a></li>
      </ul>
      
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Se connecter</a></li>
        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">s'enregistrer</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "::layout/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 24,  46 => 23,  32 => 12,  19 => 1,);
    }
}
