<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\Login:login' => function () {
    return ($this->privates['service_locator.YxhKodh'] ?? $this->load(__DIR__.'/getServiceLocator_YxhKodhService.php'));
}, 'App\\Controller\\Profile:profile' => function () {
    return ($this->privates['service_locator.WvmW8lx'] ?? $this->load(__DIR__.'/getServiceLocator_WvmW8lxService.php'));
}, 'App\\Controller\\Login::login' => function () {
    return ($this->privates['service_locator.YxhKodh'] ?? $this->load(__DIR__.'/getServiceLocator_YxhKodhService.php'));
}, 'App\\Controller\\Profile::profile' => function () {
    return ($this->privates['service_locator.WvmW8lx'] ?? $this->load(__DIR__.'/getServiceLocator_WvmW8lxService.php'));
})));
