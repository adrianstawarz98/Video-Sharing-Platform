<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGxEywEp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGxEywEp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGxEywEp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGxEywEp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGxEywEp\App_KernelDevDebugContainer([
    'container.build_hash' => 'GxEywEp',
    'container.build_id' => '64f89cd5',
    'container.build_time' => 1603738779,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGxEywEp');
