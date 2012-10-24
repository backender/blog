<?php
namespace Backender\BlogBundle\Admin;


use Backender\BlogBundle\Listener\AddUserFieldSubscriber;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Backender\BlogBundle\Listener\PostListener;
use Symfony\Component\Form\AbstractType;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PostAdmin extends Admin
{
	protected $securityContext;
	
	public function __construct($code, $class, $baseControllerName, SecurityContextInterface $securityContext)
	{
		parent::__construct($code, $class, $baseControllerName);
		$this->securityContext = $securityContext;
	}

	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('title')
        ->add('content')
        ->add('slug')
        //->add('user')
		/*->add('user', 'text', array(
		    //'set_user' => true TODO: what's about this form.type overriding stuff?
		))*/
		;
		
		$user = $this->securityContext->getToken()->getUser();
		$formFactory = $formMapper->getFormBuilder()->getFormFactory();
		
		$userSubscriber = new AddUserFieldSubscriber($formFactory, $user);
		
		//$addUserSubscriber = $formMapper->get('adduserfield.subscriber');
		$formMapper->getFormBuilder()->addEventSubscriber($userSubscriber);
	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->add('id')
		->addIdentifier('title')
		->add('slug')
		->add('tags')
		->add('created_at')
		->add('comments', 'sonata_type_model', array('expanded' => true, 'compound' => true))
		
		// add custom action links
		->add('_action', 'actions', array(
				'actions' => array(
						'view' => array(),
						'edit' => array(),
				)
		))
		;
	}
	
}