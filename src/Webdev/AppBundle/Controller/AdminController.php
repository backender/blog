<?php

namespace Webdev\AppBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;


class AdminController extends Controller
{
	/**
	 * @Route("/admin", name="admin_dashboard")
	 * @Template()
	 * @Secure(roles="ROLE_USER")
	 */
	public function dashboardAction() 
	{
		return array();
	}
}
