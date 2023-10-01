<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Picker_BuilderService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.picker.builder' shared service.
     *
     * @return \Contao\CoreBundle\Picker\PickerBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/PickerBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/PickerBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/PickerProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/AbstractPickerProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/AbstractInsertTagPickerProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/DcaPickerProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/PagePickerProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Framework/FrameworkAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Framework/FrameworkAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/FilePickerProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/news-bundle/src/Picker/NewsPickerProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/calendar-bundle/src/Picker/EventPickerProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/faq-bundle/src/Picker/FaqPickerProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/ArticlePickerProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/PickerMenuInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/AbstractTablePickerProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/TablePickerProvider.php';

        $a = ($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService'));
        $b = ($container->services['router'] ?? $container->getRouterService());

        $container->services['contao.picker.builder'] = $instance = new \Contao\CoreBundle\Picker\PickerBuilder($a, $b);

        $c = ($container->services['translator'] ?? $container->getTranslatorService());
        $d = ($container->services['security.helper'] ?? $container->getSecurity_HelperService());
        $e = new \Contao\CoreBundle\Picker\FilePickerProvider($a, $b, $c, $d, 'files');

        $f = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        $e->setFramework($f);
        $g = new \Contao\NewsBundle\Picker\NewsPickerProvider($a, $b, $c, $d);
        $g->setFramework($f);
        $h = new \Contao\CalendarBundle\Picker\EventPickerProvider($a, $b, $c, $d);
        $h->setFramework($f);
        $i = new \Contao\FaqBundle\Picker\FaqPickerProvider($a, $b, $c, $d);
        $i->setFramework($f);

        $instance->addProvider(new \Contao\CoreBundle\Picker\PagePickerProvider($a, $b, $c, $d));
        $instance->addProvider($e);
        $instance->addProvider($g);
        $instance->addProvider($h);
        $instance->addProvider($i);
        $instance->addProvider(new \Contao\CoreBundle\Picker\ArticlePickerProvider($a, $b, $c, $d));
        $instance->addProvider(new \Contao\CoreBundle\Picker\TablePickerProvider($f, $a, $b, $c, ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService())));

        return $instance;
    }
}
