<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Model\Factory' shared autowired service.

$this->services['Pimcore\Model\Factory'] = $instance = new \Pimcore\Model\Factory();

$instance->addLoader(new \Pimcore\Model\Factory\FallbackBuilder());
$instance->addLoader(new \Pimcore\Loader\ImplementationLoader\ClassMapLoader(array()));

return $instance;
