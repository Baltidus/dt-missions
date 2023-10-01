<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_RobotsTxtService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.listener.robots_txt' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\RobotsTxtListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/RobotsTxtListener.php';

        $a = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['contao.listener.robots_txt'])) {
            return $container->privates['contao.listener.robots_txt'];
        }

        return $container->privates['contao.listener.robots_txt'] = new \Contao\CoreBundle\EventListener\RobotsTxtListener($a, '/contao');
    }
}
