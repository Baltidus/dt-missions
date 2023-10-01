<?php

namespace ContainerQDxV0qm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoInstallation_InstallToolService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao_installation.install_tool' shared service.
     *
     * @return \Contao\InstallationBundle\InstallTool
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/installation-bundle/src/InstallTool.php';

        return $container->services['contao_installation.install_tool'] = new \Contao\InstallationBundle\InstallTool(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), \dirname(__DIR__, 4), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->privates['contao.migration.collection'] ?? $container->load('getContao_Migration_CollectionService')));
    }
}
