<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Contao_Command_Symlinks_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.contao.command.symlinks.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao.command.symlinks.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('contao:symlinks', [], 'Symlinks the public resources into the public directory.', false, function () use ($container): \Contao\CoreBundle\Command\SymlinksCommand {
            return ($container->services['contao.command.symlinks'] ?? $container->load('getContao_Command_SymlinksService'));
        });
    }
}
