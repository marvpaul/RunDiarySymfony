<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\Delete:delete' => function () {
    return ($this->privates['service_locator.gdCKe.1'] ?? $this->load(__DIR__.'/getServiceLocator_GdCKe_1Service.php'));
}, 'App\\Controller\\Login:login' => function () {
    return ($this->privates['service_locator.LyMHFiQ'] ?? $this->load(__DIR__.'/getServiceLocator_LyMHFiQService.php'));
}, 'App\\Controller\\Profile:profile' => function () {
    return ($this->privates['service_locator.w1Tz7OE'] ?? $this->load(__DIR__.'/getServiceLocator_W1Tz7OEService.php'));
}, 'App\\Controller\\Delete::delete' => function () {
    return ($this->privates['service_locator.gdCKe.1'] ?? $this->load(__DIR__.'/getServiceLocator_GdCKe_1Service.php'));
}, 'App\\Controller\\Login::login' => function () {
    return ($this->privates['service_locator.LyMHFiQ'] ?? $this->load(__DIR__.'/getServiceLocator_LyMHFiQService.php'));
}, 'App\\Controller\\Profile::profile' => function () {
    return ($this->privates['service_locator.w1Tz7OE'] ?? $this->load(__DIR__.'/getServiceLocator_W1Tz7OEService.php'));
})));
