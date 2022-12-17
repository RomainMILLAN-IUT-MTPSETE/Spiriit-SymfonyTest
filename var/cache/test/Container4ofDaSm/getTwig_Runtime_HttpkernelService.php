<?php

namespace Container4ofDaSm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Runtime_HttpkernelService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php';

        return $container->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(($container->privates['fragment.handler'] ?? $container->load('getFragment_HandlerService')), ($container->privates['fragment.uri_generator'] ?? $container->load('getFragment_UriGeneratorService')));
    }
}
