<?php

namespace ContainerN583W70;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VLPOE1kService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VLPOE1k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VLPOE1k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'billetRepository' => ['privates', 'App\\Repository\\BilletRepository', 'getBilletRepositoryService', true],
        ], [
            'billetRepository' => 'App\\Repository\\BilletRepository',
        ]);
    }
}
