<?php

namespace Vertacoo\CoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('vertacoo_core');

        $rootNode->children()
                    ->arrayNode('form')->canBeEnabled()
                            ->children()
                                ->booleanNode('help_extension')->defaultFalse()->end()
                                ->booleanNode('errors_serializer')->defaultFalse()->end()
                            ->end()
                    ->end()
        ->end();

        return $treeBuilder;
    }
}
