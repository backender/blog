<?php

namespace Webdev\BlogBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Webdev\BlogBundle\Entity\Tag;


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
    	
        return array('tags' => $tags);
    }
}
