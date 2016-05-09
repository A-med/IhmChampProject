<?php

namespace IIT\IhmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use IIT\IhmBundle\Entity\Resultat;
use IIT\IhmBundle\Form\ResultatType;

/**
 * Resultat controller.
 *
 * @Route("/resultat")
 */
class ResultatController extends Controller
{

    /**
     * Lists all Resultat entities.
     *
     * @Route("/", name="resultat")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IITIhmBundle:Resultat')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Resultat entity.
     *
     * @Route("/", name="resultat_create")
     * @Method("POST")
     * @Template("IITIhmBundle:Resultat:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Resultat();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('resultat_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Resultat entity.
     *
     * @param Resultat $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Resultat $entity)
    {
        $form = $this->createForm(new ResultatType(), $entity, array(
            'action' => $this->generateUrl('resultat_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Resultat entity.
     *
     * @Route("/new", name="resultat_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Resultat();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Resultat entity.
     *
     * @Route("/{id}", name="resultat_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IITIhmBundle:Resultat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Resultat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Resultat entity.
     *
     * @Route("/{id}/edit", name="resultat_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IITIhmBundle:Resultat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Resultat entity.');
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
    * Creates a form to edit a Resultat entity.
    *
    * @param Resultat $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Resultat $entity)
    {
        $form = $this->createForm(new ResultatType(), $entity, array(
            'action' => $this->generateUrl('resultat_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Resultat entity.
     *
     * @Route("/{id}", name="resultat_update")
     * @Method("PUT")
     * @Template("IITIhmBundle:Resultat:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IITIhmBundle:Resultat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Resultat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('resultat_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Resultat entity.
     *
     * @Route("/{id}", name="resultat_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IITIhmBundle:Resultat')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Resultat entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('resultat'));
    }

    /**
     * Creates a form to delete a Resultat entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('resultat_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
