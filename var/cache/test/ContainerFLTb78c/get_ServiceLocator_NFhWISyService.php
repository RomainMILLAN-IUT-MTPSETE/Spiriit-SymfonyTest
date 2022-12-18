<?php

namespace ContainerFLTb78c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NFhWISyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.nFhWISy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nFhWISy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'requestStack' => ['services', 'request_stack', 'getRequestStackService', false],
        ], [
            'requestStack' => '?',
        ]);
    }
}
