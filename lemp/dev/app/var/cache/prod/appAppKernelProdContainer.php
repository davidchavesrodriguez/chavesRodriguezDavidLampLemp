<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW4iwS3n\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW4iwS3n/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerW4iwS3n.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerW4iwS3n\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerW4iwS3n\appAppKernelProdContainer([
    'container.build_hash' => 'W4iwS3n',
    'container.build_id' => 'c8492951',
    'container.build_time' => 1710145740,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW4iwS3n');