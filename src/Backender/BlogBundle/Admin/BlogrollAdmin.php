<?php
namespace Backender\BlogBundle\Admin;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class BlogrollAdmin extends Admin
{

	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('name')
		->add('url')
        ;

	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->add('name')
		->add('url')
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