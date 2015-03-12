<?php
namespace Agence\AgenceBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Agence\AgenceBundle\Form\AdressesUtilisateursType;
use Agence\AgenceBundle\Entity\AdressesUtilisateurs;


    class PanierController extends Controller
    {


    Public function menuAction()
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));

        return $this->render('AgenceBundle:Default:panier/modulesUsed/panier.html.twig', 
                                                                                array('articles' => $articles,
                                                                                      'articles' => $articles));
    }    
    public function panierAction()
    {
        $session = $this->getRequest()->getSession();
        // pour detruire la session
        //$session->remove('panier');
        //die(); 

        // ici une condition if 
        if (!$session->has('panier')) $session->set('panier',array());
        $em =$this->getDoctrine()->getManager();
        $danseuses = $em->getRepository('AgenceBundle:Danseuses')->findArray(array_keys($session->get('panier')));

        return $this->render('AgenceBundle:Default:panier/panier.html.twig', array('danseuses' => $danseuses,
            'panier' => $session->get('panier')));
    }

    public function livraisonAction()
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $entity = new AdressesUtilisateurs();
        $form = $this->createForm(new AdressesUtilisateursType($em), $entity);

        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->handleRequest($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setUtilisateur($utilisateur);
                $em->persist($entity);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livraison'));
            }
        }
       
        return $this->render('AgenceBundle:Default:panier/livraison.html.twig', array('utilisateur' => $utilisateur,
                                                                                      'form' => $form->createView()));
    }


    public function validationAction()
    {
        return $this->render('AgenceBundle:Default:panier/validation.html.twig');
    }


    # here is the action to add a danser in 
    public function ajouterAction($id)
    {
        $session = $this->getRequest()->getSession();

        // équivaut à un isset en php
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier)) {
            if ($this->getRequest()->query->get('qte') != null) $panier[$id] = $this->getRequest()->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Les jours ont bien été modifié avec succès');
            
        }else {
            if ($this->getRequest()->query->get('qte') !=null)
                $panier[$id] = $this->getRequest()->query->get('qte');
            else
                $panier[$id] = 1; 
        }
        // je recupere dans la session courante et l'injecte dans panier 
        $session->set('panier', $panier);

        $this->get('session')->getFlashBag()->add('success','La danseuse à été ajouté avec succès');
        // redirect = redirige vers la page ci-apres
        return $this->redirect($this->generateUrl('panier'));
        
    }

    public function supprimerAction($id)
    {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier');
        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->get('session')->getFlashBag()->add('success','La danseuse à été supprimé avec succès');
        }

        return $this->redirect($this->generateUrl('panier'));

    }
    }

