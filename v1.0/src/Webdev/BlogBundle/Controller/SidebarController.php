<?php

namespace Webdev\BlogBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Webdev\BlogBundle\Entity\Tag;
use Webdev\BlogBundle\Entity\Post;
use Doctrine\Common\Collections\ArrayCollection;


class SidebarController extends Controller
{
    /**
     * @Template()
     */
    public function tagcloudAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
		
    	//get all tags
    	$tags = $em->getRepository('WebdevBlogBundle:Tag')->findAll();
    	shuffle($tags);
    	
        return array('tags' => $tags);
    }
    
    /**
     * @Template()
     */
    public function showProjectsAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $projects = $em->getRepository('WebdevBlogBundle:Project')->findAll();

        return array('projects' => $projects);
    }
    
	/**
	 * @Template()
	 */
	public function showArchiveAction() 
	{
		$em = $this->getDoctrine()->getEntityManager();
		
		$archive = array();
		
		$posts = $em->getRepository('WebdevBlogBundle:Post')->findAll();
		$p = count($posts);
		
		for($i = 0; $i < $p; $i++)
		{
			$created_at = $posts[$i]->getCreatedAt();
			$created_at = date_format($created_at, "Y");
			if(!in_array($created_at, $archive)){
				array_push($archive, $created_at);
			}
		}
		sort($archive);
		
		return array('archive' => $archive);
	}
	
	/**
	 * @Template()
	 */
	public function showBlogrollAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
	
		$blogroll = $em->getRepository('WebdevBlogBundle:Blogroll')->findAll();
	
		return array('blogroll' => $blogroll);
	}

}
