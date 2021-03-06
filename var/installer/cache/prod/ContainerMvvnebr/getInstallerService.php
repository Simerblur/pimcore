<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Install\Installer' shared autowired service.

$this->services['Pimcore\Install\Installer'] = $instance = new \Pimcore\Install\Installer(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->load('getLoggerService.php')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Install\Profile\ProfileLocator']) ? $this->services['Pimcore\Install\Profile\ProfileLocator'] : $this->load('getProfileLocatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Install\Profile\FileInstaller']) ? $this->services['Pimcore\Install\Profile\FileInstaller'] : $this->load('getFileInstallerService.php')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

$instance->setInstallProfileFiles(true);
$instance->setSymlink(false);

return $instance;
