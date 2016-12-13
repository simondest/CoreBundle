<?php

namespace Vertacoo\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class VertacooCoreExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
        
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        if ($this->isConfigEnabled($container, $config['form'])) {
            $this->registerFormConfiguration($config, $container, $loader);
        }
        

        
    }
    
    private function registerFormConfiguration($config, $container, $loader){
        if ($config['form']['errors_serializer'] == true) {
            $loader->load('form_errors_serializer.yml');
        }
        if ($config['form']['help_extension'] == true) {
            $loader->load('form_help_extension.yml');
        }
    }
}
