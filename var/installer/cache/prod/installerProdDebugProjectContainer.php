<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMvvnebr\installerProdDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMvvnebr/installerProdDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerMvvnebr.legacy');

    return;
}

if (!\class_exists(installerProdDebugProjectContainer::class, false)) {
    \class_alias(\ContainerMvvnebr\installerProdDebugProjectContainer::class, installerProdDebugProjectContainer::class, false);
}

return new \ContainerMvvnebr\installerProdDebugProjectContainer(array(
    'container.build_hash' => 'Mvvnebr',
    'container.build_id' => 'a8799c9d',
    'container.build_time' => 1525859474,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerMvvnebr');
