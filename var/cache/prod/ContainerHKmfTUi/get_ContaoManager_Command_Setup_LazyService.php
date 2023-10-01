<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ContaoManager_Command_Setup_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.contao_manager.command.setup.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao_manager.command.setup.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('contao:setup', [], 'Sets up a Contao Managed Edition. This command will be run when executing the "contao-setup" binary.', false, function () use ($container): \Contao\ManagerBundle\Command\ContaoSetupCommand {
            return ($container->privates['contao_manager.command.setup'] ?? $container->load('getContaoManager_Command_SetupService'));
        });
    }
}
