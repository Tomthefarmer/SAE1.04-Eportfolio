<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1fBtDax\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1fBtDax/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1fBtDax.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1fBtDax\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1fBtDax\App_KernelDevDebugContainer([
    'container.build_hash' => '1fBtDax',
    'container.build_id' => '0793c9d6',
    'container.build_time' => 1706665237,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container1fBtDax');
