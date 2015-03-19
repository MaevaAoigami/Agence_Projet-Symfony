<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Agence\AgenceBundle\Entity\Danseuses;
use Agence\AgenceBundle\Form\DanseusesType;

/**
 * Danseuses controller.
 *
 */
class DanseusesController extends Controller
{

    /**
     * Liste des profils de la danseuse connectée
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $entities = $em->getRepository('AgenceBundle:Danseuses')->findBy(array('utilisateur' => $user));

        return $this->render('AgenceBundle:Danseuses:index.html.twig', array(
            'user' => $user,
            'entities' => $entities,
        ));
    }
    /**
     * Création d'une nouvelle danseuse
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Danseuses();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setValider(0);
            $entity->setUtilisateur($this->container->get('security.context')->getToken()->getUser());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pages_danseuses_show', array('id' => $entity->getId())));
        }

        return $this->render('AgenceBundle:Danseuses:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Création du formulaire d'ajout d'une danseuse
     *
     * @param Danseuses $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Danseuses $entity)
    {
        $form = $this->createForm(new DanseusesType(), $entity, array(
            'action' => $this->generateUrl('pages_danseuses_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Danseuses entity.
     *
     */
    public function newAction()
    {
        $entity = new Danseuses();
        $form   = $this->createCreateForm($entity);

        return $this->render('AgenceBundle:Danseuses:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Voir les informations de la danseuse
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

        return $this->render('AgenceBundle:Danseuses:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Édition du profil de la danseuse
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

        return $this->render('AgenceBundle:Danseuses:edit.html.twig', array(
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
            'action' => $this->generateUrl('pages_danseuses_update', array('id' => $entity->getId())),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));


        return $form;
    }
    /**
     * Mise à jour du profil de la danseuse
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
            
            return $this->redirect($this->generateUrl('pages_danseuses_edit', array('id' => $id)));
        }

        return $this->render('AgenceBundle:Danseuses:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Suppression du profil de la danseuse
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

        return $this->redirect($this->generateUrl('pages_danseuses'));
    }

    /**
     * Création du formulaire de suppression du profil de la danseuse
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pages_danseuses_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
