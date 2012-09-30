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
    
    	//get project
    	$project = $em->getRepository('WebdevBlogBundle:Project')->findOneByName($name);
    	
    	if(!$project) {
    		throw $this->createNotFoundException('Projekt "' . $name . '" ist nicht vorhanden.');
    	}
    	return array('project' => $project);
    }
    
    /**
     * @Route("/archive/{name}", name="blog_search_archive")
     * @Template()
     */
    public function archiveAction($name)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	
    	$archive = array();
    	
    	//get archive
    	//$archive = $em->getRepository('WebdevBlogBundle:Post')->findAll();
    	
    	$query = $em->createQuery(
    			'SELECT p FROM WebdevBlogBundle:Post p ORDER BY p.created_at DESC' //latest first
    	);
    	$posts = $query->getResult();
    	
    	if(!$posts) {
    		throw $this->createNotFoundException('No Posts in "' . $name.' ->'.print_r($posts));
    	}
    	
    	$p = count($posts);
    	
    	for($i = 0; $i < $p; $i++)
    	{
    		$created_at = $posts[$i]->getCreatedAt();
    		$created_at = date_format($created_at, "Y");
    		if($name == $created_at){
    			array_push($archive, $posts[$i]);
    		}
    	}
    	
    	return array('archive' => $archive, 'year' => $name);
    }
}
