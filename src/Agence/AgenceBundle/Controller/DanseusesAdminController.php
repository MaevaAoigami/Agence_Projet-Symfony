<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Agence\AgenceBundle\Entity\Danseuses;
use Agence\AgenceBundle\Form\DanseusesType;

/**
 * Danseuses Admin controller.
 *
 */
class DanseusesAdminController extends Controller
{
	/**
     * Liste de toutes les danseuses
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AgenceBundle:Danseuses')->findAll();

        return $this->render('AgenceBundle:DanseusesAdmin:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
	 /**
     * Affichage des informations de la danseuses
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AgenceBundle:Danseuses')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Danseuses entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AgenceBundle:DanseusesAdmin:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Édition de la danseuse
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AgenceBundle:Danseuses')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Danseuses entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AgenceBundle:DanseusesAdmin:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Création du formulaire d'édition de la danseuse
    *
    * @param Danseuses $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Danseuses $entity)
    {
        $form = $this->createForm(new DanseusesType(), $entity, array(
            'action' => $this->generateUrl('admin_danseuses_update', array('id' => $entity->getId())),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));


        return $form;
    }
    /**
     * Mise à jour de la danseuse
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AgenceBundle:Danseuses')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Danseuses entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $em->flush();
            
            return $this->redirect($this->generateUrl('admin_danseuses_edit', array('id' => $id)));
        }

        return $this->render('AgenceBundle:DanseusesAdmin:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Suppression de la danseuse
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AgenceBundle:Danseuses')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Danseuses entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_danseuses'));
    }

    /**
     * Création du formulaire de suppression de la danseuse
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_danseuses_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer',
                                             'attr' => array('class' => 'bouton'),
                                             ))
            ->getForm()
        ;
    }

    /**
    * Validation du profil de la danseuse
    *
    */
    public function validateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AgenceBundle:Danseuses')->find($id);
        if(!$entities) {
            throw $this->createNotFoundException('Unable to find Danseuses entity.');
        }

        if($entities->getValider() == 0) {
            $entities->setValider(1);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_danseuses'));
    }
}