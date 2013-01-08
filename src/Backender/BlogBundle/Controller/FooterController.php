<?php

namespace Backender\BlogBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class FooterController extends Controller
{

    /**
     * @Template()
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    function blogrollAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $blogroll = $em->getRepository('BackenderBlogBundle:Blogroll')->findAll();

        if (!$blogroll) {
            throw $this->createNotFoundException('No blogroll available.');
        }

        return array(
            'blogroll' => $blogroll
        );
    }


}
