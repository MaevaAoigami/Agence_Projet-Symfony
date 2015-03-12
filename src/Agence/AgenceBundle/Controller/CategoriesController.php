<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        // find all trouver toutes les pages
        $categories = $em->getRepository('AgenceBundle:Categories')->findAll();
        
        return $this->render('AgenceBundle:Default:categories/modulesUsed/menu.html.twig', array('categories' => $categories));
    }
}
