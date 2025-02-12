<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\dto\DtoInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * @template PayloadType of HasPayloadInterface
 * @extends DtoInterface<PayloadType>
 * @phpstan-type TreenodeDtoShape object{'nodeId': non-negative-int, 'parentId': ?non-negative-int, 'treeId': ?non-negative-int, 'payload': mixed, 'index': ?non-negative-int}
 */
interface TreenodeDtoInterface extends DtoInterface
{
}
