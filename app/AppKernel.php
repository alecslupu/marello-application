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
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            //new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new JMS\JobQueueBundle\JMSJobQueueBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle($this),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new Nelmio\ApiDocBundle\NelmioApiDocBundle(),
            new BeSimple\SoapBundle\BeSimpleSoapBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),

            // BAP bundles
            new Oro\Bundle\FlexibleEntityBundle\OroFlexibleEntityBundle(),
            new Oro\Bundle\UIBundle\OroUIBundle(),
            new Oro\Bundle\SoapBundle\OroSoapBundle(),
            new Oro\Bundle\SearchBundle\OroSearchBundle(),
            new Oro\Bundle\UserBundle\OroUserBundle(),
            new Oro\Bundle\MeasureBundle\OroMeasureBundle(),
            new Oro\Bundle\MenuBundle\OroMenuBundle(),
            new Oro\Bundle\GridBundle\OroGridBundle(),

            // BAP Demo bundles
            new Acme\Bundle\DemoBundle\AcmeDemoBundle(),
            new Acme\Bundle\DemoMeasureBundle\AcmeDemoMeasureBundle(),
            new Acme\Bundle\DemoFlexibleEntityBundle\AcmeDemoFlexibleEntityBundle(),
            new Acme\Bundle\DemoMenuBundle\AcmeDemoMenuBundle(),
            new Acme\Bundle\DemoGridBundle\AcmeDemoGridBundle(),
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
