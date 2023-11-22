<?php

namespace ContainerEicUURc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DtJYimMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DtJYimM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DtJYimM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'restaurant' => ['privates', '.errored..service_locator.DtJYimM.App\\Entity\\Restaurant', NULL, 'Cannot autowire service ".service_locator.DtJYimM": it references class "App\\Entity\\Restaurant" but no such service exists.'],
        ], [
            'restaurant' => 'App\\Entity\\Restaurant',
        ]);
    }
}
