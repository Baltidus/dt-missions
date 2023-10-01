<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Contao_Command_DebugTwig_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.contao.command.debug_twig.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao.command.debug_twig.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:contao-twig', [], 'Displays the Contao template hierarchy.', false, function () use ($container): \Contao\CoreBundle\Command\DebugContaoTwigCommand {
            return ($container->privates['contao.command.debug_twig'] ?? $container->load('getContao_Command_DebugTwigService'));
        });
    }
}