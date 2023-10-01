<?php

namespace ContainerQDxV0qm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Filesystem_DbafsManagerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.filesystem.dbafs_manager' shared service.
     *
     * @return \Contao\CoreBundle\Filesystem\Dbafs\DbafsManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/Dbafs/DbafsManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/Dbafs/DbafsInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/Dbafs/Dbafs.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/Dbafs/DbafsFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/VirtualFilesystemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/VirtualFilesystem.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/Dbafs/Hashing/HashGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/Dbafs/Hashing/HashGenerator.php';

        $container->services['contao.filesystem.dbafs_manager'] = $instance = new \Contao\CoreBundle\Filesystem\Dbafs\DbafsManager();

        $a = (new \Contao\CoreBundle\Filesystem\Dbafs\DbafsFactory(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService())))->__invoke(($container->privates['contao.filesystem.virtual_factory'] ?? $container->load('getContao_Filesystem_VirtualFactoryService'))->__invoke('files', false), new \Contao\CoreBundle\Filesystem\Dbafs\Hashing\HashGenerator('md5', true), 'tl_files');
        $a->useLastModified(true);
        $a->setDatabasePathPrefix('files');

        $instance->register($a, 'files');

        return $instance;
    }
}
