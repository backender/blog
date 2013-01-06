<?php

namespace Backender\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FeedController extends Controller
{
    /**
     * @Route("/feed/{type}", defaults={"type" = "atom"}, name="post_feed")
     * @return Response XML Feed
     */
    public function PostFeedAction($type)
    {
    	//TODO: When post view is implemented, I should make reverse url generate here instead of manual building url!
    	$request = $this->container->get('request');
    	$baseurl = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath();
    	$baseurl = $baseurl."/post/";
    	
        $articles = $this->getDoctrine()->getRepository('BackenderBlogBundle:Post')->findAll();
		foreach($articles as $article) {
			$article->setSlug($baseurl.$article->getSlug());
		}
		
        $feed = $this->get('eko_feed.feed.manager')->get('Post');
        $feed->addFromArray($articles);

        if($type == "rss" || $type == "atom") {
            return new Response($feed->render($type));
        } else{
            throw new \Exception("Unknown feed type.");
        }
    }
}
