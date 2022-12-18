<?php

namespace ContainerFLTb78c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Listener_StopWorkerOnSigtermSignalListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.listener.stop_worker_on_sigterm_signal_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\StopWorkerOnSigtermSignalListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/EventListener/StopWorkerOnSigtermSignalListener.php';

        return $container->privates['messenger.listener.stop_worker_on_sigterm_signal_listener'] = new \Symfony\Component\Messenger\EventListener\StopWorkerOnSigtermSignalListener(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
