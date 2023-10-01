<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Contao_Command_BackupRestore_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.contao.command.backup_restore.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao.command.backup_restore.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('contao:backup:restore', [], 'Restores a database backup.', false, function () use ($container): \Contao\CoreBundle\Command\Backup\BackupRestoreCommand {
            return ($container->privates['contao.command.backup_restore'] ?? $container->load('getContao_Command_BackupRestoreService'));
        });
    }
}
