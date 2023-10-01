<?php

namespace ContainerNI3UrAI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosHttpCache_Command_InvalidateTagService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'fos_http_cache.command.invalidate_tag' shared service.
     *
     * @return \FOS\HttpCacheBundle\Command\InvalidateTagCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/http-cache-bundle/src/Command/BaseInvalidateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/http-cache-bundle/src/Command/InvalidateTagCommand.php';

        $container->privates['fos_http_cache.command.invalidate_tag'] = $instance = new \FOS\HttpCacheBundle\Command\InvalidateTagCommand(($container->services['fos_http_cache.cache_manager'] ?? $container->getFosHttpCache_CacheManagerService()));

        $instance->setName('fos:httpcache:invalidate:tag');

        return $instance;
    }
}
