<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DataContainer_ValidateCustomRgxpService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.listener.data_container.validate_custom_rgxp' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\ValidateCustomRgxpListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/ValidateCustomRgxpListener.php';

        return $container->services['contao.listener.data_container.validate_custom_rgxp'] = new \Contao\CoreBundle\EventListener\DataContainer\ValidateCustomRgxpListener(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
