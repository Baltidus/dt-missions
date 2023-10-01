<?php

namespace ContainerNI3UrAI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_PrettyErrorScreenService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.listener.pretty_error_screen' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\PrettyErrorScreenListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/PrettyErrorScreenListener.php';

        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->privates['contao.listener.pretty_error_screen'])) {
            return $container->privates['contao.listener.pretty_error_screen'];
        }
        $b = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['contao.listener.pretty_error_screen'])) {
            return $container->privates['contao.listener.pretty_error_screen'];
        }
        $c = ($container->services['security.helper'] ?? $container->getSecurity_HelperService());

        if (isset($container->privates['contao.listener.pretty_error_screen'])) {
            return $container->privates['contao.listener.pretty_error_screen'];
        }
        $d = ($container->services['contao.routing.page_registry'] ?? $container->getContao_Routing_PageRegistryService());

        if (isset($container->privates['contao.listener.pretty_error_screen'])) {
            return $container->privates['contao.listener.pretty_error_screen'];
        }
        $e = ($container->services['http_kernel'] ?? $container->getHttpKernelService());

        if (isset($container->privates['contao.listener.pretty_error_screen'])) {
            return $container->privates['contao.listener.pretty_error_screen'];
        }

        return $container->privates['contao.listener.pretty_error_screen'] = new \Contao\CoreBundle\EventListener\PrettyErrorScreenListener(true, $a, $b, $c, $d, $e);
    }
}
