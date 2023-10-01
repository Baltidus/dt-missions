<?php

namespace ContainerNI3UrAI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Command_BackupRestoreService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.command.backup_restore' shared service.
     *
     * @return \Contao\CoreBundle\Command\Backup\BackupRestoreCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Command/Backup/AbstractBackupCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Command/Backup/BackupRestoreCommand.php';

        $container->privates['contao.command.backup_restore'] = $instance = new \Contao\CoreBundle\Command\Backup\BackupRestoreCommand(($container->privates['contao.doctrine.backup_manager'] ?? $container->load('getContao_Doctrine_BackupManagerService')));

        $instance->setName('contao:backup:restore');
        $instance->setDescription('Restores a database backup.');

        return $instance;
    }
}
