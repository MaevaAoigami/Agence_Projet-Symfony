<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
    	$em = $this->getDoctrine()->getManager();

    	$danseuses = $em->getRepository('AgenceBundle:Danseuses')->findAll();

        return $this->render('AgenceBundle:Default:produits/layout/produits.html.twig', array('danseuses' => $danseuses));
    }

    public function presentationAction()
    {
        return $this->render('AgenceBundle:Default:produits/layout/presentation.html.twig');
    }
}
