<?php

namespace Backender\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;

use Likeme\SystemBundle\Form\Type\NextFormType;

use Likeme\SystemBundle\Form\Type\LikeFormType;

use Symfony\Component\Security\Core\SecurityContext;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Likeme\SystemBundle\Entity\Like;
use Likeme\SystemBundle\Entity\Next;

class PostController extends Controller
{   
    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
	   	return array();
    }
}
