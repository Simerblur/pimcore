<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.agtlh51' shared service.

return $this->services['service_locator.agtlh51'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('cache' => function () {
    return ${($_ = isset($this->services['pimcore.cache.core.handler']) ? $this->services['pimcore.cache.core.handler'] : $this->getPimcore_Cache_Core_HandlerService()) && false ?: '_'};
}));
