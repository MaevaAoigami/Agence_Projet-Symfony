<?php

/* PagesBundle:Default/pages/layout:pages.html.twig */
class __TwigTemplate_ae6bd12b8c69205b4cdca38cf74a0c2589163cde03562176e64dc0440a8286c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::layout/layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t
\t\t\t<div class=\"span12\">
\t\t\t\t<div class=\"row\">
                    <h4>ELEONORA ABBAGNATO</h4>
                    <h5>AB29837 Item Model</h5>
                    <p>Elle a depuis ajouté à son répertoire : Symphonie en ut, Les Quatre tempéraments, Concerto Barocco, Tchaïkovski-pas de deux, Agon, Sérénade (Balanchine),le rôle –titre de Giselle (d’après Coralli etPerrot), Pulcinella (Dunn), Woundwork 1 (Forsythe), le rôle-titrede Paquita (Lacotte d’aprèsMazilier et Petipa), Etudes (Lander), Suite en blanc (Lifar), Nathalie dans Les Enfants du paradis (Martinez), L’Anatomie de la sensation (McGregor),le rôle-titre de Sylvia, Troisième Symphonie de Gustav Mahler (Neumeier),Aurore dans La Belle au bois dormant, une dessœurs et le rôle-titre de Cendrillon, Juliette dans Roméo et Juliette, Odette-Odile dans Le lac des cygnes (Noureev), La Jeune fille dans Le Loup (Petit), Le Parc (Preljocaj).</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
                    <h4>AMANDINE ALBISSON</h4>
                    <h5>AB29837 Item Model</h5>
                    <p>Il a depuis ajouté à son répertoire : Apollon (Balanchine), Le Sacre du printemps (Béjart), Une Sorte de…, Appartement (Ek), Pétrouchka (Fokine), Kaguyahime (Kylián), Lescaut dans L’Histoire de Manon (MacMillan), L’Après-midi d’un faune (Nijinski), Drosselmeyr / le Prince dans Casse-Noisette, Abderam dans Raymonda, Solor dans La Bayadère (Noureev), Le Jeune homme dans Le Rendez-vous (Petit), rôle-titre de Siddharta (Preljocaj), In The Night (Robbins).</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
                    <h4>AURÉLIE DUPONT</h4>
                    <h5>AB29837 Item Model</h5>
                    <p>Danse Albrecht dans Giselle (d’après Coralli et Perrot), White Darkness (Duato), Le Maure dans Pétrouchka (Fokine), Lucien dans Paquita (Lacotte d’après Mazilier et Petipa), le rôle-titre de Caligula (Le Riche), Suite en blanc (Lifar), Armand dans La Dame aux camélias (Neumeier), Jean de Brienne et Abderam dans Raymonda, Solor dans La Bayadère (Noureev), Frédéri dans L’Arlésienne (Petit), rôle-titre de Siddharta (Preljocaj) et In The Night (Robbins).
\t\t\t\t\t<br>
\t\t\t\t\tA l’issue de la représentation de La Bayadère (Noureev), le 2 juin 2010, est nommé « Étoile ».
\t\t\t\t\t<br>
\t\t\t\t\tIl a depuis ajouté à son répertoire : Orphée dans Orphée et Eurydice (Bausch), Appartement (Ek), Lescaut dans L’Histoire de Manon (MacMillan), Baptiste dans Les Enfants du paradis (Martinez), Le Prince Siegfried dans Le Lac des cygnes, L’Acteur-vedette dans Cendrillon (Noureev), Le Loup, Le Jeune homme et la mort, Don José dans Carmen (Petit), Afternoon of a Faun (Robbins).</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Default/pages/layout:pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  36 => 4,  11 => 2,);
    }
}
