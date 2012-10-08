<?php
namespace Backender\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CommentAdmin extends Admin
{

	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('post')
		->add('name')
        ->add('content')
        ->add('origin')
		;	
	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->add('id')
		->add('name')
		->addIdentifier('post')
		->addIdentifier('content')
		->add('created_at')

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