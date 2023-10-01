<?php

namespace ContainerQDxV0qm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoCalendar_Listener_PreviewUrlCreateService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao_calendar.listener.preview_url_create' shared service.
     *
     * @return \Contao\CalendarBundle\EventListener\PreviewUrlCreateListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/calendar-bundle/src/EventListener/PreviewUrlCreateListener.php';

        $a = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['contao_calendar.listener.preview_url_create'])) {
            return $container->privates['contao_calendar.listener.preview_url_create'];
        }

        return $container->privates['contao_calendar.listener.preview_url_create'] = new \Contao\CalendarBundle\EventListener\PreviewUrlCreateListener(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $a);
    }
}
