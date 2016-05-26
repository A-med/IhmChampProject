<?php

namespace IIT\IhmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use IIT\IhmBundle\Entity\Partie;
use IIT\IhmBundle\Form\PartieType;

/**
 * Partie controller.
 *
 * @Route("/partie")
 */
class PartieController extends Controller
{

    /**
     * Lists all Partie entities.
     *
     * @Route("/", name="partie")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IITIhmBundle:Partie')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Partie entity.
     *
     * @Route("/", name="partie_create")
     * @Method("POST")
     * @Template("IITIhmBundle:Partie:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Partie();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('partie_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Partie entity.
     *
     * @param Partie $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Partie $entity)
    {
        $form = $this->createForm(new PartieType(), $entity, array(
            'action' => $this->generateUrl('partie_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Partie entity.
     *
     * @Route("/new", name="partie_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Partie();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Partie entity.
     *
     * @Route("/{id}", name="partie_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IITIhmBundle:Partie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Partie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Partie entity.
     *
     * @Route("/{id}/edit", name="partie_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IITIhmBundle:Partie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Partie entity.');
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
    * Creates a form to edit a Partie entity.
    *
    * @param Partie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Partie $entity)
    {
        $form = $this->createForm(new PartieType(), $entity, array(
            'action' => $this->generateUrl('partie_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Partie entity.
     *
     * @Route("/{id}", name="partie_update")
     * @Method("PUT")
     * @Template("IITIhmBundle:Partie:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IITIhmBundle:Partie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Partie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('partie_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Partie entity.
     *
     * @Route("/{id}", name="partie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IITIhmBundle:Partie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Partie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('partie'));
    }

    /**
     * Creates a form to delete a Partie entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('partie_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    
 
}
