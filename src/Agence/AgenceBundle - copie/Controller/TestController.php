<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Agence\AgenceBundle\Entity\Danseuses;
use Agence\AgenceBundle\Form\testType;


class TestController extends Controller
{
# ici je ne comprends pas pourquoi j'ai une erreur
    public function testFormulaireAction() {

        $form = $this->createForm(new testType());

        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->bind($this->get('request'));
            //$form->getData();
            //echo $form['email']->getData();
            var_dump($form->getData());
            die();

            $form = $this->createForm(new testType(),array('email' => 'contact@operationnel.com',''));
        }

        return $this->render('AgenceBundle:default:test.html.twig', array('form' => $form->createView()));
        

    }
























    /*
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
   	
    	$danseuses = $em->getRepository('AgenceBundle:Danseuses')->findAll();
    	
        return $this->render('AgenceBundle:Default:test.html.twig', array('danseuses' => $danseuses));
    }
*/ 
    
}
