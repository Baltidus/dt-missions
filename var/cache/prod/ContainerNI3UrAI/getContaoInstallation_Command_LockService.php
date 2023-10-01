<?php

namespace ContainerNI3UrAI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoInstallation_Command_LockService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao_installation.command.lock' shared service.
     *
     * @return \Contao\InstallationBundle\Command\LockCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/installation-bundle/src/Command/LockCommand.php';

        $container->privates['contao_installation.command.lock'] = $instance = new \Contao\InstallationBundle\Command\LockCommand((\dirname(__DIR__, 3).'/install_lock'));

        $instance->setName('contao:install:lock');
        $instance->setDescription('Locks the install tool.');

        return $instance;
    }
}
