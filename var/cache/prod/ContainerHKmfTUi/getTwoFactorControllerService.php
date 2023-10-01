<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwoFactorControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\FrontendModule\TwoFactorController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\FrontendModule\TwoFactorController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/AbstractFrontendModuleController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/TwoFactorController.php';

        $container->services['Contao\\CoreBundle\\Controller\\FrontendModule\\TwoFactorController'] = $instance = new \Contao\CoreBundle\Controller\FrontendModule\TwoFactorController();

        $instance->setContainer(($container->privates['.service_locator.bTVjleE'] ?? $container->load('get_ServiceLocator_BTVjleEService'))->withContext('Contao\\CoreBundle\\Controller\\FrontendModule\\TwoFactorController', $container));

        return $instance;
    }
}
