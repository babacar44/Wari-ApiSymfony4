<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLZ1pYu9\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLZ1pYu9/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLZ1pYu9.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLZ1pYu9\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerLZ1pYu9\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'LZ1pYu9',
    'container.build_id' => '7769d842',
    'container.build_time' => 1563968246,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLZ1pYu9');
