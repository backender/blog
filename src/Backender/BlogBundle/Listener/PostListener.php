<?php
namespace Backender\BlogBundle\Listener;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\Event\DataEvent;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormEvents;

class PostListener implements EventSubscriberInterface
{
	private $factory;
	private $container;
	
    public function __construct(FormFactoryInterface $factory, ContainerInterface $container)
    {
        $this->factory = $factory;
        $this->container = $container;
    }

    public static function getSubscribedEvents()
    {
    	return array(FormEvents::POST_SET_DATA => 'postSetData');
    }

	public function prePersist(DataEvent $event)
	{

        $data = $event->getData();
        $form = $event->getForm();
        
        // During form creation setData() is called with null as an argument
        // by the FormBuilder constructor. We're only concerned with when
        // setData is called with an actual Entity object in it (whether new,
        // or fetched with Doctrine). This if statement let's us skip right
        // over the null condition.
        if (null === $data) {
        	return;
        }
        
        //Get user
        $securityContext = $this->container->get('security.context');
        $user = $securityContext->getToken()->getUser();
        
        //Check for already existing user
        if (!$data->getUser()) {
        	$form->add('user', $user);
        }

		
	}
	

}
