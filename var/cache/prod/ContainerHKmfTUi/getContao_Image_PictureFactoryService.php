<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Image_PictureFactoryService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.image.picture_factory' shared service.
     *
     * @return \Contao\CoreBundle\Image\PictureFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Image/PictureFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Image/PictureFactory.php';

        $a = ($container->services['contao.image.picture_generator'] ?? $container->load('getContao_Image_PictureGeneratorService'));

        if (isset($container->services['contao.image.picture_factory'])) {
            return $container->services['contao.image.picture_factory'];
        }
        $b = ($container->services['contao.image.factory'] ?? $container->load('getContao_Image_FactoryService'));

        if (isset($container->services['contao.image.picture_factory'])) {
            return $container->services['contao.image.picture_factory'];
        }
        $c = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->services['contao.image.picture_factory'])) {
            return $container->services['contao.image.picture_factory'];
        }

        return $container->services['contao.image.picture_factory'] = new \Contao\CoreBundle\Image\PictureFactory($a, $b, $c, false, $container->parameters['contao.image.imagine_options']);
    }
}
