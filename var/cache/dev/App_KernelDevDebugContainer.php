<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5ZXstEt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5ZXstEt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5ZXstEt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5ZXstEt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5ZXstEt\App_KernelDevDebugContainer([
    'container.build_hash' => '5ZXstEt',
    'container.build_id' => 'e21380db',
    'container.build_time' => 1602688618,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5ZXstEt');
