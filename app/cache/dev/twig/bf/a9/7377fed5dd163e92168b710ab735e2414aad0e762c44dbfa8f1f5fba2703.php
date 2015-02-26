<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_bfa97377fed5dd163e92168b710ab735e2414aad0e762c44dbfa8f1f5fba2703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <!-- ici se trouve la navigation
    =============================== -->   
        ";
        // line 20
        $this->displayBlock('nav', $context, $blocks);
        // line 23
        echo "    <!-- FIN DE LA NAVIGATION 
    ========================= -->


        <!-- Full Page Image Background Carousel Header
        =============================================== -->
    <header id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <!-- Set the first background image using inline CSS below. -->
                <div class=\"fill\" style=\"background-image:url('";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
        echo "');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class=\"item\">
                <!-- Set the second background image using inline CSS below. -->
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Two');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class=\"item\">
                Set the third background image using inline CSS below.
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Three');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>

    </header>
    <!-- END SLIDER 
    ===============--> 
        <div class=\"jumbotron\">
          <h1>Agence Opérationnel</h1>
          <p>... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam fuga dolore, consectetur magnam vero asperiores. Quibusdam nostrum dignissimos itaque fuga, quod placeat possimus obcaecati, aspernatur aliquid voluptatem molestiae quisquam, aperiam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam similique incidunt vitae alias omnis quisquam nihil quasi in quos quia. Est voluptate temporibus aut accusamus, possimus quod dignissimos magni eum.</p>
          <p><a class=\"bouton\" href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("page", array("id" => 1));
        echo "\" role=\"button\">En savoir +</a></p>
        </div>
   <!-- ICI SE TROUVE LE BODY,LE MAIN DU SITE 
   ======================================== -->
    ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "   <!-- FIN BODY FIN MAIN 
   ====================--> 
    <hr />

    <footer id=\"footer\" class=\"vspace20\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4 offset1\">
                <!--
                    <h4>Informations</h4>
                    <ul class=\"nav nav-stacked\">
                        <li><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("page", array("id" => 1));
        echo "\">CGV</a>
                        <li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("page", array("id" => 2));
        echo "\">Mentions légales</a>
                    </ul>
                -->
                </div> 

                <div class=\"span4\">
                    <h4>Notre Agence</h4>
                    <p><i class=\"icon-map-marker\"></i>&nbsp;Levallois 92300 - 12 rue Jacques Ibert</p>
                </div>

                <div class=\"span2\">
                    <h4>Nous contacter</h4>
                    <p>Chris Eric & Maëva Ridard</p>
                    <p><i class=\"icon-phone\"></i>&nbsp;Tel: 06 59 41 18 35</p>
                    
                </div>
            </div>

            <div class=\"row\">
                <div class=\"span4\">
                    <p>&copy; Copyright 2014 - Agence Opérationnel</p>
                </div>
            </div>
        </div>
    </footer>   
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 121
        $this->displayBlock('javascripts', $context, $blocks);
        // line 122
        echo "</body>

</html>

    
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Agence Opérationnel";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 20
    public function block_nav($context, array $blocks = array())
    {
        echo " 
            ";
        // line 21
        $this->env->loadTemplate("::layout/nav.html.twig")->display($context);
        // line 22
        echo "        ";
    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        echo " 
    ";
    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 121,  228 => 80,  224 => 22,  222 => 21,  217 => 20,  212 => 14,  206 => 5,  195 => 122,  193 => 121,  189 => 120,  185 => 119,  157 => 94,  153 => 93,  140 => 82,  138 => 80,  131 => 76,  93 => 41,  73 => 23,  71 => 20,  62 => 15,  60 => 14,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  30 => 5,  24 => 1,);
    }
}
