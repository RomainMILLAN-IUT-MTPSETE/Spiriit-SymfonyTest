<?php

namespace ContainerSjjyn6q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W5avtWpService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.w5avtWp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.w5avtWp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'requestStack' => ['services', 'request_stack', 'getRequestStackService', false],
        ], [
            'managerRegistry' => '?',
            'requestStack' => '?',
        ]);
    }
}
