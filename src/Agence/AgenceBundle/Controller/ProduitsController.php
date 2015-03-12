<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        $findDanseuses = $em->getRepository('AgenceBundle:Danseuses')->findBy(array('disponible' => 1));
        if ($session->has('panier'))
        	$panier = $session->get('panier');
        else 
        	$panier = false;

        $danseuses  = $this->get('knp_paginator');
        $danseuses = $danseuses->paginate(
            $findDanseuses,
            $this->get('request')->query->get('page', 1)/*page number*/,
            6/*limit per page*/
        );
        
        return $this->render('AgenceBundle:Default:produits/layout/produits.html.twig', array('danseuses' => $danseuses,
                                                                                              'panier' => $panier));
    }
    public function homeAction()
    {
        return $this->render('AgenceBundle:Default:home.html.twig');
    }
}
