<?php

namespace Webdev\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TagType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('quantifier')
            ->add('posts')
        ;
    }

    public function getName()
    {
        return 'webdev_blogbundle_tagtype';
    }
}
