<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDlJE3qM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDlJE3qM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDlJE3qM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDlJE3qM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDlJE3qM\App_KernelDevDebugContainer([
    'container.build_hash' => 'DlJE3qM',
    'container.build_id' => '7e38be2a',
    'container.build_time' => 1602947964,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDlJE3qM');
