<?php

namespace ContainerNI3UrAI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_InsertTags_TranslationService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.listener.insert_tags.translation' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\InsertTags\TranslationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/InsertTags/TranslationListener.php';

        return $container->services['contao.listener.insert_tags.translation'] = new \Contao\CoreBundle\EventListener\InsertTags\TranslationListener(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
