<?php

namespace Webdev\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PostType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('slug')
            //->add('content')
        	->add('content', 'textarea', array(
        		'attr' => array(
            	'class' => 'tinymce',
            	'data-theme' => 'advanced' // simple, medium, bbcode
       		 )))
            ->add('created_at')
            ->add('updated_at')
            ->add('tags')
            ->add('user')
        ;

    }

    public function getName()
    {
        return 'webdev_blogbundle_posttype';
    }
}
