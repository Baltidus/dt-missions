<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_FrontendPreviewAuthenticatorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.security.frontend_preview_authenticator' shared service.
     *
     * @return \Contao\CoreBundle\Security\Authentication\FrontendPreviewAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Authentication/FrontendPreviewAuthenticator.php';

        return $container->services['contao.security.frontend_preview_authenticator'] = new \Contao\CoreBundle\Security\Authentication\FrontendPreviewAuthenticator(($container->services['security.helper'] ?? $container->getSecurity_HelperService()), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->services['contao.security.token_checker'] ?? $container->getContao_Security_TokenCheckerService()), ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), ($container->privates['contao.security.frontend_user_provider'] ?? $container->load('getContao_Security_FrontendUserProviderService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
