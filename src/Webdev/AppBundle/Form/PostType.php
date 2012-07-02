<?php

namespace Webdev\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceListInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('slug')
            //->add('content', 'ckeditor')
        	->add('content', 'textarea', array(
        		'attr' => array(
            	'class' => 'tinymce',
            	'data-theme' => 'advanced' // simple, medium, bbcode
       		 )))
            ->add('created_at')
            ->add('updated_at')
            ->add('tags')
            ->add('user')
            ->add('projects')
        ;

    }

    public function getName()
    {
        return 'webdev_blogbundle_posttype';
    }
}
