<?php

namespace ContainerQDxV0qm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInitializeControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'Contao\CoreBundle\Controller\InitializeController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\InitializeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/InitializeController.php';

        return $container->services['Contao\\CoreBundle\\Controller\\InitializeController'] = new \Contao\CoreBundle\Controller\InitializeController(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['http_kernel'] ?? $container->getHttpKernelService()), ($container->services['kernel'] ?? $container->get('kernel', 1)));
    }
}
