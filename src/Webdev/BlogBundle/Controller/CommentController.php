<?php

namespace Webdev\BlogBundle\Controller;

use Webdev\BlogBundle\Entity\Comment;

use Doctrine\ORM\EntityManager;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{
	/**
	 * @Route("/post/{slug}/comment/{origin}/", name="post_newComment")
     */
	public function newCommentAction($slug, $origin = NULL)
	{
		$request = $this->getRequest();		
		$em = $this->getDoctrine()->getEntityManager();

		$post = $em->getRepository('WebdevBlogBundle:Post')->findOneBySlug($slug);
		
		$comment = new Comment();
		$comment->setContent('');
		$comment->setCreatedAt(new \DateTime());
		$comment->setUser($this->getUser());
		if ($origin == NULL) {
			$comment->setPost($post);
		} else {
			$origin_comment = $em->getRepository('WebdevBlogBundle:Comment')->findOneById($origin);
			$comment->setOrigin($origin_comment);
		}
		
		$form = $this->createFormBuilder($comment)
		->add('content', 'textarea')
		->getForm();
		
		$validator = $this->get('validator');
		$errors = $validator->validate($comment);
		
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
		
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($comment);
				$em->flush();
				return $this->redirect($this->generateUrl("blog_post_view", array('slug' => $slug)));
			}
		}
		
		return $this->render('WebdevBlogBundle:Comment:newcomment.html.twig', array('newcomment' => $form->createView(), 'slug' => $slug, 'origin' => $origin));
	}
	
}
