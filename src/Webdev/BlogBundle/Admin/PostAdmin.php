<?php
namespace Webdev\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends Admin
{
	/**
	 * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
	 * @return void
	 */
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('title')
		->add('content', 'textarea', array(
        		'attr' => array(
            	'class' => 'tinymce',
            	'data-theme' => 'advanced' // simple, medium, bbcode
       		 )))
		->add('tags')
		->add('user')
		->add('created_at')
		;
	}
	
	/**
	 * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
	 * @return void
	 */
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
		->add('user')
		->add('tags')
		;
	}
	
	/**
	 * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
	 * @return void
	 */
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->add('id')
		->addIdentifier('title')
		->add('slug')
		->add('tags')
		->add('created_at')
		->add('user')
		;
	}
}