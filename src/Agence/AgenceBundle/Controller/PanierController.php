<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class panierController extends Controller
{
    public function panierAction()
    {
        return $this->render('AgenceBundle:Default:panier/panier.html.twig');
    }

    public function livraisonAction()
    {
        return $this->render('AgenceBundle:Default:panier/livraison.html.twig');
    }

    public function validationAction()
    {
        return $this->render('AgenceBundle:Default:panier/validation.html.twig');
    }
}
