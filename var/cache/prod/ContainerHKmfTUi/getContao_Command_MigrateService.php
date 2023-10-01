<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Command_MigrateService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.command.migrate' shared service.
     *
     * @return \Contao\CoreBundle\Command\MigrateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Command/MigrateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Doctrine/Schema/MysqlInnodbRowSizeCalculator.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        $container->privates['contao.command.migrate'] = $instance = new \Contao\CoreBundle\Command\MigrateCommand(($container->privates['contao.migration.collection'] ?? $container->load('getContao_Migration_CollectionService')), ($container->services['contao.resource_locator'] ?? $container->load('getContao_ResourceLocatorService')), \dirname(__DIR__, 4), ($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), ($container->privates['contao.doctrine.backup_manager'] ?? $container->load('getContao_Doctrine_BackupManagerService')), ($container->privates['contao.doctrine.schema_provider'] ?? $container->load('getContao_Doctrine_SchemaProviderService')), new \Contao\CoreBundle\Doctrine\Schema\MysqlInnodbRowSizeCalculator($a), $a, ($container->services['contao_installation.database.installer'] ?? $container->load('getContaoInstallation_Database_InstallerService')));

        $instance->setName('contao:migrate');
        $instance->setDescription('Executes migrations and updates the database schema.');

        return $instance;
    }
}
