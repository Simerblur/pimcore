<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6do1xtb\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6do1xtb/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container6do1xtb.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container6do1xtb\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container6do1xtb\appDevDebugProjectContainer(array(
    'container.build_hash' => '6do1xtb',
    'container.build_id' => 'd05af137',
    'container.build_time' => 1526477787,
), __DIR__.\DIRECTORY_SEPARATOR.'Container6do1xtb');
