<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZBPL1n1\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZBPL1n1/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerZBPL1n1.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerZBPL1n1\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerZBPL1n1\appAppKernelProdContainer([
    'container.build_hash' => 'ZBPL1n1',
    'container.build_id' => '4fbe46e3',
    'container.build_time' => 1710144630,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZBPL1n1');
