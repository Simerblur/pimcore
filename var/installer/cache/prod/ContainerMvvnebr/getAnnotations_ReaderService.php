<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'annotations.reader' shared service.

$this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

$a = new \Doctrine\Common\Annotations\AnnotationRegistry();
$a->registerLoader('class_exists');

$instance->addGlobalIgnoredName('required', $a);

return $instance;
