<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.ot.xa.b' shared service.

return $this->services['service_locator.ot.xa.b'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('db' => function () {
    return ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'};
}));
