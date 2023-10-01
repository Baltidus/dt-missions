<?php

namespace ContainerHKmfTUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioSecurity_CspReporterControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'nelmio_security.csp_reporter_controller' shared service.
     *
     * @return \Nelmio\SecurityBundle\Controller\ContentSecurityPolicyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/Controller/ContentSecurityPolicyController.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Log/Logger.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Log/LogFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Log/LogFormatter.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Filter/NoiseDetectorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Filter/DomainsNoiseDetector.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Filter/DomainsRegexNoiseDetector.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Filter/SchemesNoiseDetector.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Filter/InjectedScriptsNoiseDetector.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Filter/BrowserBugsNoiseDetector.php';

        $a = new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\Filter();
        $a->addNoiseDetector(new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\DomainsNoiseDetector());
        $a->addNoiseDetector(new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\DomainsRegexNoiseDetector());
        $a->addNoiseDetector(new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\SchemesNoiseDetector());
        $a->addNoiseDetector(new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\InjectedScriptsNoiseDetector());
        $a->addNoiseDetector(new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\BrowserBugsNoiseDetector(($container->privates['nelmio_security.ua_parser.ua_php.provider'] ?? $container->load('getNelmioSecurity_UaParser_UaPhp_ProviderService'))));

        return $container->services['nelmio_security.csp_reporter_controller'] = new \Nelmio\SecurityBundle\Controller\ContentSecurityPolicyController(new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Log\Logger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Log\LogFormatter(), 'notice'), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), $a);
    }
}
