<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.mailer.newsletter_mailer.transport' shared service.

$this->services['swiftmailer.mailer.newsletter_mailer.transport'] = $instance = new \Swift_Transport_MailTransport(${($_ = isset($this->services['swiftmailer.transport.mailinvoker']) ? $this->services['swiftmailer.transport.mailinvoker'] : $this->services['swiftmailer.transport.mailinvoker'] = new \Swift_Transport_SimpleMailInvoker()) && false ?: '_'}, new \Swift_Events_SimpleEventDispatcher());

$instance->registerPlugin(new \Pimcore\Mail\Plugins\RedirectingPlugin($this->parameters['swiftmailer.mailer.newsletter_mailer.delivery_addresses'], array()));
$instance->registerPlugin(${($_ = isset($this->services['swiftmailer.mailer.newsletter_mailer.plugin.messagelogger']) ? $this->services['swiftmailer.mailer.newsletter_mailer.plugin.messagelogger'] : $this->services['swiftmailer.mailer.newsletter_mailer.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger()) && false ?: '_'});

return $instance;
