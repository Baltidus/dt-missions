<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Image_LegacyResizerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.image.legacy_resizer' shared service.
     *
     * @return \Contao\CoreBundle\Image\LegacyResizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/ResizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/Resizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/DeferredResizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/DeferredResizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Framework/FrameworkAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Framework/FrameworkAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Image/LegacyResizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/ResizeCalculator.php';

        $container->services['contao.image.legacy_resizer'] = $instance = new \Contao\CoreBundle\Image\LegacyResizer((\dirname(__DIR__, 4).'/assets/images'), ($container->privates['contao.image.resize_calculator'] ?? ($container->privates['contao.image.resize_calculator'] = new \Contao\Image\ResizeCalculator())), ($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($container->privates['contao.image.deferred_image_storage'] ?? $container->load('getContao_Image_DeferredImageStorageService')));

        $instance->setFramework(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()));

        return $instance;
    }
}
