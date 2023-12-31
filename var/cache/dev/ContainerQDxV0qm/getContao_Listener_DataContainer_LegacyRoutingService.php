<?php

namespace ContainerQDxV0qm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DataContainer_LegacyRoutingService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.listener.data_container.legacy_routing' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\LegacyRoutingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/LegacyRoutingListener.php';

        return $container->services['contao.listener.data_container.legacy_routing'] = new \Contao\CoreBundle\EventListener\DataContainer\LegacyRoutingListener(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), ($container->services['translator'] ?? $container->getTranslatorService()), false, '.html');
    }
}
