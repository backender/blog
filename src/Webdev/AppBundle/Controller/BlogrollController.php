<?php

namespace Webdev\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Webdev\BlogBundle\Entity\Blogroll;
use Webdev\AppBundle\Form\BlogrollType;

/**
 * Blogroll controller.
 *
 * @Route("/admin/blogroll")
 */
class BlogrollController extends Controller
{
    /**
     * Lists all Blogroll entities.
     *
     * @Route("/", name="admin_blogroll")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('WebdevBlogBundle:Blogroll')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Blogroll entity.
     *
     * @Route("/{id}/show", name="admin_blogroll_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('WebdevBlogBundle:Blogroll')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Blogroll entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Blogroll entity.
     *
     * @Route("/new", name="admin_blogroll_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Blogroll();
        $form   = $this->createForm(new BlogrollType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Blogroll entity.
     *
     * @Route("/create", name="admin_blogroll_create")
     * @Method("post")
     * @Template("WebdevAppBundle:Blogroll:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Blogroll();
        $request = $this->getRequest();
        $form    = $this->createForm(new BlogrollType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_blogroll_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Blogroll entity.
     *
     * @Route("/{id}/edit", name="admin_blogroll_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('WebdevBlogBundle:Blogroll')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Blogroll entity.');
        }

        $editForm = $this->createForm(new BlogrollType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Blogroll entity.
     *
     * @Route("/{id}/update", name="admin_blogroll_update")
     * @Method("post")
     * @Template("WebdevAppBundle:Blogroll:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('WebdevBlogBundle:Blogroll')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Blogroll entity.');
        }

        $editForm   = $this->createForm(new BlogrollType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_blogroll_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Blogroll entity.
     *
     * @Route("/{id}/delete", name="admin_blogroll_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('WebdevBlogBundle:Blogroll')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Blogroll entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_blogroll'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
