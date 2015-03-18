<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Agence\AgenceBundle\Entity\Galerie;
use Agence\AgenceBundle\Form\GalerieType;

/**
 * Galerie controller.
 *
 */
class GalerieController extends Controller
{

    /**
     * Lists all Galerie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AgenceBundle:Galerie')->findAll();

        return $this->render('AgenceBundle:Galerie:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function createAction(Request $request)
    {
        $entity = new Galerie();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $danseuse = getDanseuse();

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setDanseuse($danseuse);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('danseuse_galerie_create', array('id' => $entity->getId())));
        }

        return $this->render('AgenceBundle:Galerie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Galerie entity.
     *
     * @param Galerie $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Galerie $entity)
    {
        $form = $this->createForm(new GalerieType(), $entity, array(
            'action' => $this->generateUrl('danseuse_galerie_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Galerie entity.
     *
     */
    public function newAction()
    {
        $entity = new Galerie();
        $form   = $this->createCreateForm($entity);

        return $this->render('AgenceBundle:Galerie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Deletes a Galerie entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AgenceBundle:Galerie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Galerie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('danseuse_galerie'));
    }

    /**
     * Creates a form to delete a Galeries entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('danseuse_galerie_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}