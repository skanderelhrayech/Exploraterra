<?php

namespace ContainerN583W70;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vy46eIeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Vy46eIe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Vy46eIe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'vol' => ['privates', '.errored..service_locator.Vy46eIe.App\\Entity\\Vol', NULL, 'Cannot autowire service ".service_locator.Vy46eIe": it references class "App\\Entity\\Vol" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'vol' => 'App\\Entity\\Vol',
        ]);
    }
}
