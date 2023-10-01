<?php

namespace ContainerNI3UrAI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_Widget_CustomRgxpService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.listener.widget.custom_rgxp' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\Widget\CustomRgxpListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Widget/CustomRgxpListener.php';

        return $container->services['contao.listener.widget.custom_rgxp'] = new \Contao\CoreBundle\EventListener\Widget\CustomRgxpListener(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
