<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PanierController extends Controller
{

    public function supprimerAction($id)
    {

    }

    public function ajouterAction($id)
    {
        $session = $this->getRequest()->getSession();

        if(!$session->has('panier')) $session->set('panier', array());
        $panier = $session->get('panier');

        // $panier[ID DU PRODUIT] => QUANTITÉ POUR LE PRODUIT EN QUESTION
        if (array_key_exists($id, $panier)) {
            if ($this->getRequest()->query->get('qte') != null) $panier[$id] = $this->getRequest()->query->get('qte');
        } else {
            if ($this->getRequest()->query->get('qte') != null)
                $panier[$id] = $this->getRequest()->query->get('qte');
            else
                $panier[$id] = 1;
        }

        $session->set('panier', $panier);

        return $this->redirect($this->generateURL('panier'));
    }

    public function panierAction()
    {
        $session = $this->getRequest()->getSession();
        if ($session->has('panier')) $session->set('panier', array());

        $em = $this->getDoctrine()->getManager();
        $danseuses = $em->getRepository('AgenceBundle:Danseuses')->findArray(array_keys($session->get('panier')));

        return $this->render('AgenceBundle:Default:panier/panier.html.twig');
    }

    public function livraisonAction()
    {
        return $this->render('AgenceBundle:Default:panier/livraison.html.twig');
    }

    public function validationAction()
    {
        return $this->render('AgenceBundle:Default:panier/validation.html.twig');
    }

}
