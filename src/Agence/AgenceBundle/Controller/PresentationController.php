<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PresentationController extends Controller
{
    public function presentationAction($id)
    {
        $repository = $this->container->get('doctrine')->getRepository('AgenceBundle:Danseuses');
        $danseuse = $repository->findOneById($id);

        return $this->render('AgenceBundle:Default:produits/layout/presentation.html.twig', array('danseuse' => $danseuse));
    }
}