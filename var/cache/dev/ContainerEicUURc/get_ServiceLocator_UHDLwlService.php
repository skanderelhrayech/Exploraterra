<?php

namespace ContainerEicUURc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UHDLwlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.U_HDLwl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.U_HDLwl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'billet' => ['privates', '.errored..service_locator.U_HDLwl.App\\Entity\\Billet', NULL, 'Cannot autowire service ".service_locator.U_HDLwl": it references class "App\\Entity\\Billet" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'billet' => 'App\\Entity\\Billet',
            'entityManager' => '?',
        ]);
    }
}
