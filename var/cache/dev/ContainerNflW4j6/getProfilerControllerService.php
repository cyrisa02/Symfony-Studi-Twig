<?php

namespace ContainerNflW4j6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfilerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Controller/ProfilerController.php';

        return $container->services['Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController'] = new \Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['.container.private.profiler'] ?? $container->get_Container_Private_ProfilerService()));
    }
}
