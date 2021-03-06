<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
        		
        	new Symfony\Bundle\DoctrineFixturesBundle\DoctrineFixturesBundle(),
        	new FOS\UserBundle\FOSUserBundle(),
        	
            new Webdev\BlogBundle\WebdevBlogBundle(),
            new Webdev\AppBundle\WebdevAppBundle(),
        		
        	new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),
        	new Trsteel\CkeditorBundle\TrsteelCkeditorBundle(),
        	
        	new Knp\Bundle\MenuBundle\KnpMenuBundle(),
        	new Sonata\jQueryBundle\SonatajQueryBundle(),
        	new Sonata\AdminBundle\SonataAdminBundle(),
        	new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
        	new Sonata\BlockBundle\SonataBlockBundle(),
        	new Sonata\CacheBundle\SonataCacheBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
