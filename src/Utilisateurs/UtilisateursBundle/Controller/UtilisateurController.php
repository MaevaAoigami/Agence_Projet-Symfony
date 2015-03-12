<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateurController extends Controller
{
    public function factureAction()
    {

    	$em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('AgenceBundle:Commande')->byFacture($this->getUser());

        return $this->render('UtilisateursBundle:Default:layout/facture.html.twig', array('factures' => $factures));
    }

    public function facturePDFAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('AgenceBundle:Commande')->findOneBy(array('utilisateur' => $this->getUser(),
        																		  'valider' => 1,
        																		  'id' => $id));

        if(!$facture) {
        	$this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue.');
        	return $this->redirect($this->generateUrl('facture'));
        }

        $html = $this->renderView('UtilisateursBundle:Default:layout/facturePDF.html.twig', array('facture' => $facture));

		require_once($this->get('kernel')->getRootDir().'/../vendor/ensepar/html2pdf/HTML2PDF.php');

        $html2pdf = new \HTML2PDF('P','A4','fr');

        $html2pdf->pdf->SetAuthor('Agence Danseuses');
        $html2pdf->pdf->SetTitle('Facture '.$facture->getReference());
        $html2pdf->pdf->SetSubject('Facture Agence Danseuses');
        $html2pdf->pdf->SetKeywords('facture, agence, danseuses');

        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);	
        $html2pdf->Output('Facture.pdf');

        $response = new Response();
        $response->headers->set('Content-Type', 'application/pdf');

        return $response;

    }
}
