<?php

namespace ContainerNI3UrAI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DataContainer_DisableCanonicalFieldsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.listener.data_container.disable_canonical_fields' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\DisableCanonicalFieldsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/DisableCanonicalFieldsListener.php';

        return $container->services['contao.listener.data_container.disable_canonical_fields'] = new \Contao\CoreBundle\EventListener\DataContainer\DisableCanonicalFieldsListener(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
