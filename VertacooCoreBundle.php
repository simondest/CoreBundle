<?php

namespace Vertacoo\CoreBundle;
use Vertacoo\CoreBundle\DependencyInjection\Compiler\FieldsetCompilerPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;


class VertacooCoreBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new FieldsetCompilerPass());
    }
}
