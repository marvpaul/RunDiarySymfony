<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEMjDmrL\srcProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEMjDmrL/srcProdProjectContainer.php') {
    touch(__DIR__.'/ContainerEMjDmrL.legacy');

    return;
}

if (!\class_exists(srcProdProjectContainer::class, false)) {
    \class_alias(\ContainerEMjDmrL\srcProdProjectContainer::class, srcProdProjectContainer::class, false);
}

return new \ContainerEMjDmrL\srcProdProjectContainer();
