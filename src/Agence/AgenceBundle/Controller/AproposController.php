<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AproposController extends Controller
{
	/**
     * Affichage de la page À propos
     *
     */
    public function aproposAction()
    {
        
        return $this->render('AgenceBundle:Apropos:apropos.html.twig');
    }
}