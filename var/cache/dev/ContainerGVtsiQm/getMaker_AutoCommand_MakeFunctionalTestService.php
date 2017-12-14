<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_functional_test' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/MakerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php';
include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';

$this->privates['maker.auto_command.make_functional_test'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeFunctionalTest(), ($this->privates['maker.generator'] ?? $this->load(__DIR__.'/getMaker_GeneratorService.php')));

$instance->setName('make:functional-test');

return $instance;
