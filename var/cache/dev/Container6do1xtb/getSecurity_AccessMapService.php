<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

$this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/settings/display-custom-logo'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login/(login|lostpassword|deeplink)$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), array(0 => 'ROLE_PIMCORE_USER'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/webservice'), array(0 => 'ROLE_PIMCORE_USER'), NULL);

return $instance;
