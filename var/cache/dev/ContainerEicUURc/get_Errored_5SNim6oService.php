<?php

namespace ContainerEicUURc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_5SNim6oService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.5SNim6o' shared service.
     *
     * @return \App\Entity\Evenement
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\EvenementController::delete()": the $evenement argument is type-hinted with the non-existent class or interface: "App\\Entity\\Evenement".');
    }
}
