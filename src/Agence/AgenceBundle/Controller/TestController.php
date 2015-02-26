<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Agence\AgenceBundle\Entity\Danseuses;


class TestController extends Controller
{
    public function AjouterAction()
    {
    	$em = $this->getDoctrine()->getManager();
/*
    	$danseuse = new Danseuses();
    	$danseuse->setCategorie('Danseuse Etoile');
    	$danseuse->setDescription('c\'est une étoile depuis tres longtemps');
    	$danseuse->setDisponible('1');
    	$danseuse->setImage('http://www.franceinter.fr/sites/default/files/imagecache/scald_image_max_size/2012/09/14/453519/images/la%20Bayad%C3%A8re001.jpg');
    	$danseuse->setNom('Vagina Turlutova');
    	$danseuse->setPrix('1200.45');
    	$danseuse->setTva('19.6');

    	$em->persist($danseuse);


    	$danseuse2 = new Danseuses();
    	$danseuse2->setCategorie('Danseuse Etoile');
    	$danseuse2->setDescription('c\'est une danseuse depuis tres longtemps');
    	$danseuse2->setDisponible('1');
    	$danseuse2->setImage('http://www.franceinter.fr/sites/default/files/imagecache/scald_image_max_size/2012/09/14/453519/images/la%20Bayad%C3%A8re001.jpg');
    	$danseuse2->setNom('Irina dupont');
    	$danseuse2->setPrix('1200.45');
    	$danseuse2->setTva('19.6');

    	$em->persist($danseuse2);

    	$em->flush();
*/    	
    	$danseuses = $em->getRepository('AgenceBundle:Danseuses')->findAll();
    	
        return $this->render('AgenceBundle:Default:test.html.twig', array('danseuses' => $danseuses));
    }

    
}
