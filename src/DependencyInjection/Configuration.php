<?php

declare(strict_types=1);

namespace SyliusDigitalProductPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('acme_sylius_example');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
