<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Cache_EntityTagsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.cache.entity_tags' shared service.
     *
     * @return \Contao\CoreBundle\Cache\EntityCacheTags
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cache/EntityCacheTags.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'));

        if (isset($container->services['contao.cache.entity_tags'])) {
            return $container->services['contao.cache.entity_tags'];
        }
        $b = ($container->services['fos_http_cache.cache_manager'] ?? $container->getFosHttpCache_CacheManagerService());

        if (isset($container->services['contao.cache.entity_tags'])) {
            return $container->services['contao.cache.entity_tags'];
        }

        return $container->services['contao.cache.entity_tags'] = new \Contao\CoreBundle\Cache\EntityCacheTags($a, ($container->services['fos_http_cache.http.symfony_response_tagger'] ?? $container->getFosHttpCache_Http_SymfonyResponseTaggerService()), $b);
    }
}
