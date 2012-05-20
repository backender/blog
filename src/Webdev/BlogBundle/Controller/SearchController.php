<?php

namespace Webdev\BlogBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Webdev\BlogBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JMS\SecurityExtraBundle\Annotation\Secure;



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
    	if(!$tag) {
    		throw $this->createNotFoundException('Tag "' . $name . '" ist nicht vorhanden.');
    	}
        return array('tag' => $tag);
    }
    
    /**
     * @Route("/project/{name}", name="blog_search_project")
     * @Template()
     */
    public function projectAction($name)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    
    	//get tag
    	$project = $em->getRepository('WebdevBlogBundle:Project')->findOneByName($name);
    	
    	if(!$project) {
    		throw $this->createNotFoundException('Projekt "' . $name . '" ist nicht vorhanden.');
    	}
    	return array('project' => $project);
    }
}
