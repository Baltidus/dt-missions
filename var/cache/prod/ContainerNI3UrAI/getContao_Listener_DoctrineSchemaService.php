<?php

namespace ContainerNI3UrAI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DoctrineSchemaService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.listener.doctrine_schema' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DoctrineSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DoctrineSchemaListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Doctrine/Schema/DcaSchemaProvider.php';

        $a = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['contao.listener.doctrine_schema'])) {
            return $container->privates['contao.listener.doctrine_schema'];
        }
        $b = ($container->privates['contao.doctrine.schema_provider'] ?? $container->load('getContao_Doctrine_SchemaProviderService'));

        if (isset($container->privates['contao.listener.doctrine_schema'])) {
            return $container->privates['contao.listener.doctrine_schema'];
        }

        return $container->privates['contao.listener.doctrine_schema'] = new \Contao\CoreBundle\EventListener\DoctrineSchemaListener(new \Contao\CoreBundle\Doctrine\Schema\DcaSchemaProvider($a, ($container->services['doctrine'] ?? $container->load('getDoctrineService')), $b));
    }
}
