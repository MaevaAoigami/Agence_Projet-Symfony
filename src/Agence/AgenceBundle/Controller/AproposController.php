<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AproposController extends Controller
{
    public function aproposAction()
    {
        
        return $this->render('AgenceBundle:Apropos:apropos.html.twig');
    }
}