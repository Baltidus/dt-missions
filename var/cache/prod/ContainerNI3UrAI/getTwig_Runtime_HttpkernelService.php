<?php

namespace ContainerNI3UrAI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Runtime_HttpkernelService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentUriGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentUriGenerator.php';

        $a = ($container->services['fragment.handler'] ?? $container->load('getFragment_HandlerService'));

        if (isset($container->privates['twig.runtime.httpkernel'])) {
            return $container->privates['twig.runtime.httpkernel'];
        }

        return $container->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime($a, new \Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator('/_fragment', ($container->services['uri_signer'] ?? ($container->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($container->getEnv('APP_SECRET')))), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))));
    }
}
