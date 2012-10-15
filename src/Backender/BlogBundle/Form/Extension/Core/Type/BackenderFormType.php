<?php

/*
 * This file OVERRIDES part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Backender\BlogBundle\Form\Extension\Core\Type;

use Symfony\Component\Form\Extension\Core\EventListener\TrimListener;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\DependencyInjection\ContainerInterface;


use Backender\BlogBundle\Listener\PostListener;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Extension\Core\DataMapper\PropertyPathMapper;
use Symfony\Component\Form\Exception\FormException;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BackenderFormType extends FormType
{
	
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	parent::buildForm($builder, $options);
    	

        if (isset($options['set_user'])) {
            $builder->addEventSubscriber(new PostListener());
        }
    }
    
    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
    	
    	parent::setDefaultOptions($resolver);
    	
    	$resolver->setDefaults(array(
    		'set_user' => false,
		));
    }
    
 }
