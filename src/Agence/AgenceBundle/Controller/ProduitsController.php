<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Agence\AgenceBundle\Form\RechercheType;
use Agence\AgenceBundle\Entity\Categories;


class ProduitsController extends Controller
{                                   
                                #   param converter
    public function produitsAction(Categories $categorie = null)
    {

        

        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        if ($categorie != null)
            $danseuses = $em->getRepository('AgenceBundle:Danseuses')->byCategorie($categorie);

        else
        $danseuses = $em->getRepository('AgenceBundle:Danseuses')->findBy(array('disponibilite' => 1));

        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        
        return $this->render('AgenceBundle:Default:produits/layout/produits.html.twig', 
                                                                    array('danseuses' => $danseuses,
                                                                            'panier' => $panier));
    }

    public function presentationAction($id)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $danseuse = $em->getRepository('AgenceBundle:Danseuses')->find($id);

        if (!$danseuse) throw $this->createNotFoundException('La page n\'existe pas')->find($id);

        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;

        return $this->render('AgenceBundle:Default:produits/layout/presentation.html.twig', 
                                                                                array('danseuse' => $danseuse,
                                                                                      'panier' => $panier));
    }

    public function homeAction()
    {
        return $this->render('AgenceBundle:Default:home.html.twig');
    }




}
