<?php
namespace Backender\BlogBundle\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AddUserFieldSubscriber implements EventSubscriberInterface, ContainerAwareInterface
{
	private $container;
	
	public function setContainer(ContainerInterface $container = null) {
		$this->container = $container;
	}
	
 	public static function getSubscribedEvents()
    {
        // Tells the dispatcher that we want to listen on the form.pre_set_data
        // event and that the preSetData method should be called.
        return array(FormEvents::PRE_SET_DATA => 'preSetData');
    }
    
    public function preSetData()
    {
    	$securityContext = $this->container->get('security.context');
    	$user = $securityContext->getToken()->getUser();
    	print_r($user);
    }
	
	public function prePersist(LifeCycleEventArgs $args)
	{
		$entity = $args->getEntity();

		//Get user
		$securityContext = $this->container->get('security.context');
		$user = $securityContext->getToken()->getUser();

		//Set authenticated user as autor
		$entity->setUser($user);

		// ...
		$postService = $this->container->get('backender.blog.post');
		// get title now...
		// modify title to slug...
		// $entity->setSlug($slug);

	}
}