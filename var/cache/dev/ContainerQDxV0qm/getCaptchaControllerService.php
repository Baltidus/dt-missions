<?php

namespace ContainerQDxV0qm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCaptchaControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'Contao\CoreBundle\Controller\CaptchaController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\CaptchaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/CaptchaController.php';

        $container->services['Contao\\CoreBundle\\Controller\\CaptchaController'] = $instance = new \Contao\CoreBundle\Controller\CaptchaController(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), \dirname(__DIR__, 4), ($container->services['contao.cache.entity_tags'] ?? $container->load('getContao_Cache_EntityTagsService')));

        $instance->setContainer(($container->privates['.service_locator.LvLjDEU'] ?? $container->get_ServiceLocator_LvLjDEUService())->withContext('Contao\\CoreBundle\\Controller\\CaptchaController', $container));

        return $instance;
    }
}