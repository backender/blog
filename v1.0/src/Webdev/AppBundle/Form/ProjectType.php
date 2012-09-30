<?php

namespace Webdev\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('starts_at')
            ->add('ends_at')
            ->add('members')
        ;
    }

    public function getName()
    {
        return 'webdev_blogbundle_projecttype';
    }
}
