<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        $danseuses = $em->getRepository('AgenceBundle:Danseuses')->findBy(array('disponible' => 1));
        if ($session->has('panier'))
        	$panier = $session->get('panier');
        else 
        	$panier = false;
        
        return $this->render('AgenceBundle:Default:produits/layout/produits.html.twig', array('danseuses' => $danseuses,
                                                                                              'panier' => $panier));
    }
}
