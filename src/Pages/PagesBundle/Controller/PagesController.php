<?php

namespace Pages\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
	public function menuAction()
	{	
		// Chercher la liste des pages que j'ai besoin 
		$em =$this->getDoctrine()->getManager();
		//trouver toutes les pages findall
		$pages = $em->getRepository('PagesBundle:Pages')->findAll();
		// retourne à la vu dans j'ai besoin
		return $this->render('PagesBundle:default:pages/modulesUsed/menu.html.twig', array('pages' => $pages));
	}
    public function pageAction($id)
    {
    	$em =$this->getDoctrine()->getManager();
    	//trouver la page par rapport à $id	
		$page = $em->getRepository('PagesBundle:Pages')->find($id);
		
		// ceci affiche une belle erreur 404 en mode production
		// permet de ne pas etre vulnerable
		// si la page n'est pas trouver envoie ce message
		if (!$page) throw $this->createNotFoundException('La page n\'existe pas.');

        return $this->render('PagesBundle:Default:pages/layout/pages.html.twig', array('page' => $page));
    }
}
