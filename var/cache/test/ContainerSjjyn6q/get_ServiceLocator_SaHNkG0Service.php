<?php

namespace ContainerSjjyn6q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SaHNkG0Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.SaHNkG0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SaHNkG0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CartController::addToCart' => ['privates', '.service_locator.nFhWISy', 'get_ServiceLocator_NFhWISyService', true],
            'App\\Controller\\CartController::clearCart' => ['privates', '.service_locator.91QYP5y', 'get_ServiceLocator_91QYP5yService', true],
            'App\\Controller\\CartController::getListProductInCart' => ['privates', '.service_locator.uhMh3e6', 'get_ServiceLocator_UhMh3e6Service', true],
            'App\\Controller\\CartController::getNumberProductOnCart' => ['privates', '.service_locator.nFhWISy', 'get_ServiceLocator_NFhWISyService', true],
            'App\\Controller\\CartController::getTotalPrice' => ['privates', '.service_locator.uhMh3e6', 'get_ServiceLocator_UhMh3e6Service', true],
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.w5avtWp', 'get_ServiceLocator_W5avtWpService', true],
            'App\\Controller\\DefaultController::homepage' => ['privates', '.service_locator.nFhWISy', 'get_ServiceLocator_NFhWISyService', true],
            'App\\Controller\\ProductController::list' => ['privates', '.service_locator.WOTN8KP', 'get_ServiceLocator_WOTN8KPService', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.WOTN8KP', 'get_ServiceLocator_WOTN8KPService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CartController:addToCart' => ['privates', '.service_locator.nFhWISy', 'get_ServiceLocator_NFhWISyService', true],
            'App\\Controller\\CartController:clearCart' => ['privates', '.service_locator.91QYP5y', 'get_ServiceLocator_91QYP5yService', true],
            'App\\Controller\\CartController:getListProductInCart' => ['privates', '.service_locator.uhMh3e6', 'get_ServiceLocator_UhMh3e6Service', true],
            'App\\Controller\\CartController:getNumberProductOnCart' => ['privates', '.service_locator.nFhWISy', 'get_ServiceLocator_NFhWISyService', true],
            'App\\Controller\\CartController:getTotalPrice' => ['privates', '.service_locator.uhMh3e6', 'get_ServiceLocator_UhMh3e6Service', true],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.w5avtWp', 'get_ServiceLocator_W5avtWpService', true],
            'App\\Controller\\DefaultController:homepage' => ['privates', '.service_locator.nFhWISy', 'get_ServiceLocator_NFhWISyService', true],
            'App\\Controller\\ProductController:list' => ['privates', '.service_locator.WOTN8KP', 'get_ServiceLocator_WOTN8KPService', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.WOTN8KP', 'get_ServiceLocator_WOTN8KPService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CartController::addToCart' => '?',
            'App\\Controller\\CartController::clearCart' => '?',
            'App\\Controller\\CartController::getListProductInCart' => '?',
            'App\\Controller\\CartController::getNumberProductOnCart' => '?',
            'App\\Controller\\CartController::getTotalPrice' => '?',
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\DefaultController::homepage' => '?',
            'App\\Controller\\ProductController::list' => '?',
            'App\\Controller\\ProductController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CartController:addToCart' => '?',
            'App\\Controller\\CartController:clearCart' => '?',
            'App\\Controller\\CartController:getListProductInCart' => '?',
            'App\\Controller\\CartController:getNumberProductOnCart' => '?',
            'App\\Controller\\CartController:getTotalPrice' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\DefaultController:homepage' => '?',
            'App\\Controller\\ProductController:list' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
