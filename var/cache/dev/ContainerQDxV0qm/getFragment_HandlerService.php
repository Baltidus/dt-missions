<?php

namespace ContainerQDxV0qm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFragment_HandlerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'fragment.handler' shared service.
     *
     * @return \Contao\CoreBundle\Fragment\FragmentHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php';

        $a = ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $container->services['fragment.handler'] = new \Contao\CoreBundle\Fragment\FragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'esi' => ['privates', 'fragment.renderer.esi', 'getFragment_Renderer_EsiService', true],
            'forward' => ['privates', 'contao.fragment.forward_renderer', 'getContao_Fragment_ForwardRendererService', true],
            'hinclude' => ['privates', 'fragment.renderer.hinclude', 'getFragment_Renderer_HincludeService', true],
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', true],
        ], [
            'esi' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'forward' => 'Contao\\CoreBundle\\Fragment\\ForwardFragmentRenderer',
            'hinclude' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'inline' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
        ]), new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'esi' => ['privates', 'fragment.renderer.esi', 'getFragment_Renderer_EsiService', true],
            'forward' => ['privates', 'contao.fragment.forward_renderer', 'getContao_Fragment_ForwardRendererService', true],
            'hinclude' => ['privates', 'fragment.renderer.hinclude', 'getFragment_Renderer_HincludeService', true],
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', true],
        ], [
            'esi' => '?',
            'forward' => '?',
            'hinclude' => '?',
            'inline' => '?',
        ]), $a, true), $a, ($container->privates['contao.fragment.registry'] ?? $container->getContao_Fragment_RegistryService()), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], []), true);
    }
}
