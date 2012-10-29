<?php
namespace Backender\BlogBundle\Admin;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TagAdmin extends Admin
{

	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('name')
		//->add('posts')
		;	
	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->add('id')
		->addIdentifier('name')
		->add('posts')
		;
	}
}