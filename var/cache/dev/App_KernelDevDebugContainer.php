<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNflW4j6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNflW4j6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNflW4j6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNflW4j6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNflW4j6\App_KernelDevDebugContainer([
    'container.build_hash' => 'NflW4j6',
    'container.build_id' => '96287eb7',
    'container.build_time' => 1646391501,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNflW4j6');