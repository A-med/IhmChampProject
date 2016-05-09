<?php

namespace IIT\IhmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use IIT\IhmBundle\Entity\Heure;
use IIT\IhmBundle\Form\HeureType;

/**
 * Heure controller.
 *
 * @Route("/heure")
 */
class HeureController extends Controller
{

    /**
     * Lists all Heure entities.
     *
     * @Route("/", name="heure")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IITIhmBundle:Heure')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Heure entity.
     *
     * @Route("/", name="heure_create")
     * @Method("POST")
     * @Template("IITIhmBundle:Heure:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Heure();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('heure_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Heure entity.
     *
     * @param Heure $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Heure $entity)
    {
        $form = $this->createForm(new HeureType(), $entity, array(
            'action' => $this->generateUrl('heure_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Heure entity.
     *
     * @Route("/new", name="heure_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Heure();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Heure entity.
     *
     * @Route("/{id}", name="heure_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IITIhmBundle:Heure')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Heure entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Heure entity.
     *
     * @Route("/{id}/edit", name="heure_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IITIhmBundle:Heure')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Heure entity.');
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
    * Creates a form to edit a Heure entity.
    *
    * @param Heure $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Heure $entity)
    {
        $form = $this->createForm(new HeureType(), $entity, array(
            'action' => $this->generateUrl('heure_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Heure entity.
     *
     * @Route("/{id}", name="heure_update")
     * @Method("PUT")
     * @Template("IITIhmBundle:Heure:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IITIhmBundle:Heure')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Heure entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('heure_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Heure entity.
     *
     * @Route("/{id}", name="heure_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IITIhmBundle:Heure')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Heure entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('heure'));
    }

    /**
     * Creates a form to delete a Heure entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('heure_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
