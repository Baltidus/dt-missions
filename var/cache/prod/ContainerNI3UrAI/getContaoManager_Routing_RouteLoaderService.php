<?php

namespace ContainerNI3UrAI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoManager_Routing_RouteLoaderService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao_manager.routing.route_loader' shared service.
     *
     * @return \Contao\ManagerBundle\Routing\RouteLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/RouteLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/manager-bundle/src/Routing/RouteLoader.php';

        $a = ($container->services['routing.loader'] ?? $container->load('getRouting_LoaderService'));

        if (isset($container->services['contao_manager.routing.route_loader'])) {
            return $container->services['contao_manager.routing.route_loader'];
        }

        return $container->services['contao_manager.routing.route_loader'] = new \Contao\ManagerBundle\Routing\RouteLoader($a, ($container->services['contao_manager.plugin_loader'] ?? $container->get('contao_manager.plugin_loader', 1)), ($container->services['kernel'] ?? $container->get('kernel', 1)), \dirname(__DIR__, 4));
    }
}
