<?php

namespace App\Evozon\CmdWrapper\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class EvozonCmdWrapperExtension extends Extension
{
    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $xmlReader = new XmlFileLoader($container, new FileLocator(\dirname(__DIR__).'/Resources/config'));

        $xmlReader->load('collectors.xml');
        $xmlReader->load('services.xml');
    }
}