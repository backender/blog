<?php

namespace Backender\BlogBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Backender\BlogBundle\Entity\Post;


class PostController extends Controller
{   
    /**
     * @Route("/")
     * @Route("/blog", name="blog_post_index")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $posts = $em->getRepository('BackenderBlogBundle:Post')->findAll();

        if (!$posts) {
            throw $this->createNotFoundException('No posts available.');
        }

        return array(
            'posts' => $posts
        );
    }

    /**
     * @Route("/blog/{slug}", name="blog_post_view")
     * @Template()
     */
    public function viewAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $post = $em->getRepository('BackenderBlogBundle:Post')->findBySlug($slug);

        if (!$post) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return array(
            'post' => $post
        );
    }
}
