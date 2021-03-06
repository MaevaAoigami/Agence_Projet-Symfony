<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Agence\AgenceBundle\Entity\Evenements;
use Agence\AgenceBundle\Form\EvenementsType;

/**
 * Evenements controller.
 *
 */
class EvenementsController extends Controller
{
    /**
    * Affichage de l'ensemble des événements
    *
    */
    public function affichageAction()
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        $findEvent = $em->getRepository('AgenceBundle:Evenements')->findAll();

        $evenements  = $this->get('knp_paginator');
        $evenements = $evenements->paginate(
            $findEvent,
            $this->get('request')->query->get('page', 1),
             2 /*limit per page*/
         );
        
        return $this->render('AgenceBundle:Default:evenements/evenements.html.twig', array('evenements' => $evenements));
    }

    /**
     * Liste de l'ensemble des événements
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AgenceBundle:Evenements')->findAll();

        return $this->render('AgenceBundle:Evenements:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Création de l'événement
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Evenements();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_evenements_show', array('id' => $entity->getId())));
        }

        return $this->render('AgenceBundle:Evenements:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        )); 
    }

    /**
     * Création du formulaire de création de l'événements
     *
     * @param Evenements $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Evenements $entity)
    {
        $form = $this->createForm(new EvenementsType(), $entity, array(
            'action' => $this->generateUrl('admin_evenements_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Evenements entity.
     *
     */
    public function newAction()
    {
        $entity = new Evenements();
        $form   = $this->createCreateForm($entity);

        return $this->render('AgenceBundle:Evenements:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));

    }

    /**
     * Affichage des informations de l'événement
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AgenceBundle:Evenements')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenements entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AgenceBundle:Evenements:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Édition de l'événement
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AgenceBundle:Evenements')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenements entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AgenceBundle:Evenements:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Création du formulaire de l'édition de l'événement
    *
    * @param Evenements $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Evenements $entity)
    {
        $form = $this->createForm(new EvenementsType(), $entity, array(
            'action' => $this->generateUrl('admin_evenements_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Mise à jour de l'événement
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AgenceBundle:Evenements')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenements entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_evenements_edit', array('id' => $id)));
        }

        return $this->render('AgenceBundle:Evenements:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Suppression de l'événement
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AgenceBundle:Evenements')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Evenements entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_evenements'));
    }

    /**
     * Création du formulaire de suppresssion de l'événement
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_evenements_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
