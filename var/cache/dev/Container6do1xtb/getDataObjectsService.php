<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Bundle\AdminBundle\GDPR\DataProvider\DataObjects' shared autowired service.

return $this->services['Pimcore\Bundle\AdminBundle\GDPR\DataProvider\DataObjects'] = new \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\DataObjects(${($_ = isset($this->services['pimcore_admin.webservice.service']) ? $this->services['pimcore_admin.webservice.service'] : $this->services['pimcore_admin.webservice.service'] = new \Pimcore\Model\Webservice\Service()) && false ?: '_'}, $this->parameters['pimcore.gdpr-data-extrator.dataobjects']);
