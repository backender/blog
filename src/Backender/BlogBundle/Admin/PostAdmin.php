<?php
namespace Backender\BlogBundle\Admin;

use Backender\BlogBundle\Listener\AddUserFieldSubscriber;
use Symfony\Component\DependencyInjection\ContainerInterface;
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
	
	public function __construct($code, $class, $baseControllerName, ContainerInterface $container)
	{
		parent::__construct($code, $class, $baseControllerName);
		$this->container = $container;
	}

	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('title')
		->add('excerpt')
        ->add('content', 'epiceditor', array(
            'container'             => 'epiceditor',
            'basepath'              => '/~marc/blog/web/bundles/backenderepiceditor',
            'clientSideStorage'     => true,
            'localStorageName'      => 'epiceditor',
            'parser'                => 'marked',
            'focusOnLoad'           => false,
            'file'                  => array(
                'name'              => 'epiceditor',
                'defaultContent'    => '',
                'autoSave'          => 100
            ),
            'theme'                 => array(
                'base'              => '/themes/base/epiceditor.css',
                'preview'           => '/themes/preview/github.css',
                'editor'            => '/themes/editor/epic-dark.css'
            ),
            'shortcut'              => array(
                'modifier'          => 18,
                'fullscreen'        => 70,
                'preview'           => 80,
                'edit'              => 79
            )
        ))
        ->add('tags', 'sonata_type_model',array('expanded' => true, 'by_reference' => false, 'compound' => true, 'multiple' => true));
		;

	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->add('id')
		->add('user')
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
	
	public function prePersist($post)
	{
        $user = $this->container->get('security.context')->getToken()->getUser();

		$postService = $this->container->get('backender.blog.post');
		$post->setSlug($postService->createSlug($post->getTitle()));
        $post->setUser($user);
	}
	
	
}