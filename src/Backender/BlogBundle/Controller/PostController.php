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
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
	   	$entity = new Post();
        $form = $this->createFormBuilder($entity)
            ->add('content', 'epiceditor')
            ->getForm();

        return array('form' => $form->createView());
    }
}
