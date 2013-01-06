<?php
namespace Backender\BlogBundle\Listener;

use Backender\BlogBundle\Entity\Post;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PostListener
{
	protected $container;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}


	public function prePersist(LifeCycleEventArgs $args)
	{
		$entity = $args->getEntity();

		//Get user
		$securityContext = $this->container->get('security.context');
		$user = $securityContext->getToken()->getUser();
		
		if ($entity instanceof Post) {
		
			//Set authenticated user as autor
			//$entity->setUser($user);
	
			//Set slug
			//$postService = $this->container->get('backender.blog.post');

		}
	}
}