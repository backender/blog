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
	 * @Route("/post/{slug}/comment", name="post_newComment")
	 */
	public function newCommentAction($slug, $display = false)
	{
		$request = $this->getRequest();		
		$em = $this->getDoctrine()->getEntityManager();

		$post = $em->getRepository('WebdevBlogBundle:Post')->findOneBySlug($slug);
		
		$comment = new Comment();
		$comment->setContent('');
		$comment->setCreatedAt(new \DateTime());
		if ($this->getUser() != NULL){
			$comment->setUser($this->getUser());
		}
		$comment->setPost($post);
		
		$form = $this->createFormBuilder($comment)
		->add('name', 'text')
		->add('email', 'text', array('required' => false))
		->add('url', 'text', array('required' => false))
		->add('content', 'textarea', array(
				'label'  => 'Text',
		))
		->add('isPost','hidden', array('data' => 'newComment', 'property_path' => FALSE))
		->getForm();
		
		if ($request->getMethod() == 'POST') {
			$isPost = $request->get("form");
			//throw $this->createNotFoundException($isPost['isPost']);
			if ($isPost['isPost'] == "newComment") {
				$display = true;
				
				$form->bindRequest($request);
				
				$validator = $this->get('validator');
				$errors = $validator->validate($comment);
				
				if ($form->isValid()) {
					$em = $this->getDoctrine()->getEntityManager();
					$em->persist($comment);
					$em->flush();
					return $this->redirect($this->generateUrl("blog_post_view", array('slug' => $slug)));
				}
			}
		}
		
		if ($display == false) {
			return $this->render('WebdevBlogBundle:Comment:newcomment.html.twig', array('newComment' => $form->createView(), 'slug' => $slug));
							
		} else {
			return $this->render('WebdevBlogBundle:Comment:newcomment_embed.html.twig', array('newComment' => $form->createView(), 'slug' => $slug, 'post' => $post));
			//return array('newComment' => $form->createView(), 'slug' => $slug, 'post' => $post);
		}
	}
	
	/**
	 * @Route("/post/{slug}/answer/{origin}/", name="post_newAnswer")
     */
	public function newAnswerAction($slug, $origin = NULL, $display = false)
	{
		$request = $this->getRequest();		
		$em = $this->getDoctrine()->getEntityManager();

		$post = $em->getRepository('WebdevBlogBundle:Post')->findOneBySlug($slug);
		
		$comment = new Comment();
		$comment->setContent('');
		$comment->setCreatedAt(new \DateTime());
		if ($this->getUser() != NULL){
			$comment->setUser($this->getUser());
		}
		//if ($origin == NULL) {
		//	$comment->setPost($post);
		//} else {
			$origin_comment = $em->getRepository('WebdevBlogBundle:Comment')->findOneById($origin);
			$comment->setOrigin($origin_comment);
		//}
		
		$form = $this->createFormBuilder($comment)
		->add('name', 'text')
		->add('email', 'text')
		->add('url', 'text')
		->add('content', 'textarea')
		->add('isPost','hidden', array('data' => $origin, 'property_path' => FALSE))
		->getForm();
		
		$validator = $this->get('validator');
		$errors = $validator->validate($comment);
		
		if ($request->getMethod() == 'POST') {	
			$isPost = $request->get("form");
			if ($isPost['isPost'] !== null) {
				if ($origin == $isPost["isPost"]) {
					//throw $this->createNotFoundException($isPost['isPost']);
					
					$display = true;
					
					$form->bindRequest($request);
					
					if ($form->isValid()) {
						$em = $this->getDoctrine()->getEntityManager();
						$em->persist($comment);
						$em->flush();
						return $this->redirect($this->generateUrl("blog_post_view", array('slug' => $slug)));
					}	
				}
			}
		}
		
		if ($display == false) {
			return $this->render('WebdevBlogBundle:Comment:newAnswer.html.twig', array('newAnswer' => $form->createView(), 'slug' => $slug, 'origin' => $origin));
				
		} else {
			return $this->render('WebdevBlogBundle:Post:view.html.twig', array('newAnswer' => $form->createView(), 'slug' => $slug, 'origin' => $origin, 'post' => $post));
			
		}
		
	}
	
}
