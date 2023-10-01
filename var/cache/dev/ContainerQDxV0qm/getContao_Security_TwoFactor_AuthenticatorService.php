<?php

namespace ContainerQDxV0qm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_TwoFactor_AuthenticatorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.security.two_factor.authenticator' shared service.
     *
     * @return \Contao\CoreBundle\Security\TwoFactor\Authenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/TwoFactor/Authenticator.php';

        return $container->services['contao.security.two_factor.authenticator'] = new \Contao\CoreBundle\Security\TwoFactor\Authenticator();
    }
}