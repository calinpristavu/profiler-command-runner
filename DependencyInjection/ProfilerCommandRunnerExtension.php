<?php

namespace Evozon\Bundle\ProfilerCommandRunner\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class ProfilerCommandRunnerExtension extends Extension
{
    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $xmlReader = new XmlFileLoader($container, new FileLocator(\dirname(__DIR__).'/Resources/config'));

        $xmlReader->load('services.xml');
    }
}