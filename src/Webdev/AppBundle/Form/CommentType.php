<?php

namespace Webdev\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('created_at')
            ->add('content')
            ->add('user')
            ->add('post')
            ->add('origin')
        ;
    }

    public function getName()
    {
        return 'webdev_blogbundle_commenttype';
    }
}
