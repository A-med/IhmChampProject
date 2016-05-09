<?php

namespace IIT\IhmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use IIT\IhmBundle\Entity\Stade;
use IIT\IhmBundle\Form\StadeType;

/**
 * Stade controller.
 *
 * @Route("/stade")
 */
class StadeController extends Controller
{

    /**
     * Lists all Stade entities.
     *
     * @Route("/", name="stade")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IITIhmBundle:Stade')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Stade entity.
     *
     * @Route("/", name="stade_create")
     * @Method("POST")
     * @Template("IITIhmBundle:Stade:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Stade();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stade_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Stade entity.
     *
     * @param Stade $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Stade $entity)
    {
        $form = $this->createForm(new StadeType(), $entity, array(
            'action' => $this->generateUrl('stade_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Stade entity.
     *
     * @Route("/new", name="stade_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Stade();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Stade entity.
     *
     * @Route("/{id}", name="stade_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IITIhmBundle:Stade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stade entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Stade entity.
     *
     * @Route("/{id}/edit", name="stade_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IITIhmBundle:Stade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stade entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Stade entity.
    *
    * @param Stade $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Stade $entity)
    {
        $form = $this->createForm(new StadeType(), $entity, array(
            'action' => $this->generateUrl('stade_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Stade entity.
     *
     * @Route("/{id}", name="stade_update")
     * @Method("PUT")
     * @Template("IITIhmBundle:Stade:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IITIhmBundle:Stade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stade entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('stade_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Stade entity.
     *
     * @Route("/{id}", name="stade_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IITIhmBundle:Stade')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Stade entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('stade'));
    }

    /**
     * Creates a form to delete a Stade entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stade_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
