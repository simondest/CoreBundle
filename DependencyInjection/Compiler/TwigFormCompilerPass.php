<?php
namespace Vertacoo\CoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

class TwigFormCompilerPass implements CompilerPassInterface
{

    /**
     *
     * {@inheritdoc}
     *
     */
    public function process(ContainerBuilder $container)
    {
        $templateToImport = 'VertacooCoreBundle:Form:fields.html.twig';
        $formResources = $container->getParameter('twig.form.resources');
        if (is_array($formResources) && ! in_array($templateToImport, $formResources)) {
            $formResources[] = $templateToImport;
            $container->setParameter('twig.form.resources', $formResources);
        }
    }
}
