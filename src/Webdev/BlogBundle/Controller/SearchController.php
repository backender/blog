<?php

namespace Webdev\BlogBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Webdev\BlogBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



class SearchController extends Controller
{
    /**
     * @Route("/tag/{name}", name="blog_search_tag")
     * @Template()
     */
    public function tagAction($name)
    {
    	$em = $this->getDoctrine()->getEntityManager();
		
    	//get tag
    	$tag = $em->getRepository('WebdevBlogBundle:Tag')->findOneByName($name);
    	
        return array('tag' => $tag);
    }
}
