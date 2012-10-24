<?php
namespace Backender\BlogBundle\Listener;

use Symfony\Component\Form\Event\DataEvent;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvents;


class AddUserFieldSubscriber implements EventSubscriberInterface
{
	private $factory;
	
	public function __construct(FormFactoryInterface $factory, $user)
	{
		$this->factory = $factory;
		$this->user = $user;
	}
	
 	public static function getSubscribedEvents()
    {
        // Tells the dispatcher that we want to listen on the form.pre_set_data
        // event and that the preSetData method should be called.
        return array(FormEvents::POST_SET_DATA => 'postSetData');
    }
    
    public function postSetData(DataEvent $event)
    {
		$user = $this->user;
		echo $user;
		
		$data = $event->getData();
		$form = $event->getForm();
		
		//$form->add();
		
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