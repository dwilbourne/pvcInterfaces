<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\collection\CollectionElementInterface;
use pvc\interfaces\struct\dto\DtoInterface;

/**
 * @template PayloadType
 * @phpstan-type TreenodeDtoShape object{'nodeId': non-negative-int, 'parentId': ?non-negative-int, 'treeId': ?non-negative-int, 'payload': PayloadType, 'index': ?non-negative-int}
 */
interface TreenodeDtoInterface extends DtoInterface, CollectionElementInterface
{
}
