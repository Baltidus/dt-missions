<?php

namespace ContainerNI3UrAI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_Contao_AccessService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'monolog.logger.contao.access' shared service.
     *
     * @return \Contao\CoreBundle\Monolog\SystemLogger
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Monolog/SystemLogger.php';

        $a = new \Symfony\Bridge\Monolog\Logger('contao.access');
        $a->pushProcessor(($container->privates['contao.monolog.processor'] ?? $container->getContao_Monolog_ProcessorService()));
        $a->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));
        $a->pushHandler(($container->privates['contao.monolog.handler'] ?? $container->getContao_Monolog_HandlerService()));

        return $container->services['monolog.logger.contao.access'] = new \Contao\CoreBundle\Monolog\SystemLogger($a, 'ACCESS');
    }
}
