<?php
namespace Backender\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PostAdmin extends Admin
{

	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('title')
        ->add('content')
        //->add('user')
		->add('slug')
		;
	
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