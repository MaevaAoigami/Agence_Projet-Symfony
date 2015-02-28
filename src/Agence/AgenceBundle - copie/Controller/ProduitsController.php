<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
        return $this->render('AgenceBundle:Default:produits/layout/produits.html.twig');
    }

    public function presentationAction()
    {
        return $this->render('AgenceBundle:Default:produits/layout/presentation.html.twig');
    }
    public function homeAction()
    {
        return $this->render('AgenceBundle:Default:home.html.twig');
    }
}
