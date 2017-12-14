<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.default_entity_manager' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerAwareEntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ObjectManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

$a = ($this->privates['doctrine.system_cache_pool'] ?? $this->load(__DIR__.'/getDoctrine_SystemCachePoolService.php'));

$b = new \Symfony\Component\Cache\DoctrineProvider($a);

$c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), array(0 => ($this->targetDirs[3].'/src/Entity'))), 'App\\Entity');

$d = new \Doctrine\ORM\Configuration();
$d->setEntityNamespaces(array('App' => 'App\\Entity'));
$d->setMetadataCacheImpl($b);
$d->setQueryCacheImpl($b);
$d->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.result_cache_pool'] ?? $this->load(__DIR__.'/getDoctrine_ResultCachePoolService.php'))));
$d->setMetadataDriverImpl($c);
$d->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$d->setProxyNamespace('Proxies');
$d->setAutoGenerateProxyClasses(false);
$d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$d->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$d->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this));
$d->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Repository\\EntryRepository' => function () {
    return ($this->privates['App\Repository\EntryRepository'] ?? $this->load(__DIR__.'/getEntryRepositoryService.php'));
}, 'App\\Repository\\UserRepository' => function () {
    return ($this->privates['App\Repository\UserRepository'] ?? $this->load(__DIR__.'/getUserRepositoryService.php'));
}))));

$this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->load(__DIR__.'/getDoctrine_Dbal_DefaultConnectionService.php')), $d);

(new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array()))->configure($instance);

return $instance;
