<?php

namespace ContainerEicUURc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O96lmPVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o96lmPV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o96lmPV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'billetRepository' => ['privates', 'App\\Repository\\BilletRepository', 'getBilletRepositoryService', true],
            'volRepository' => ['privates', 'App\\Repository\\VolRepository', 'getVolRepositoryService', true],
        ], [
            'billetRepository' => 'App\\Repository\\BilletRepository',
            'volRepository' => 'App\\Repository\\VolRepository',
        ]);
    }
}
