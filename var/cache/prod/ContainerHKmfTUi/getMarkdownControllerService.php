<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarkdownControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\ContentElement\MarkdownController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\MarkdownController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/MarkdownController.php';

        $container->services['Contao\\CoreBundle\\Controller\\ContentElement\\MarkdownController'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\MarkdownController();

        $instance->setContainer(($container->privates['.service_locator.lmV1W6h'] ?? $container->load('get_ServiceLocator_LmV1W6hService'))->withContext('Contao\\CoreBundle\\Controller\\ContentElement\\MarkdownController', $container));

        return $instance;
    }
}
