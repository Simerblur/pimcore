<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'presta_sitemap.dumper_default' shared service.

$this->services['presta_sitemap.dumper_default'] = $instance = new \Presta\SitemapBundle\Service\Dumper(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem()) && false ?: '_'}, 'sitemap', 50000);

$instance->setDefaults($this->parameters['presta_sitemap.defaults']);

return $instance;
