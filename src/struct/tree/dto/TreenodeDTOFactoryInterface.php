<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\dto\DtoFactoryInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * Class TreenodeDTOFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @extends DtoFactoryInterface<TreenodeDTOInterface, TreenodeInterface>
 * @phpcs:ignore
 * @phpstan-type NodeData array{'nodeId': non-negative-int,'parentId': non-negative-int|null, 'treeId':non-negative-int,'payload': PayloadType, 'index'?:non-negative-int}
 */
interface TreenodeDTOFactoryInterface extends DtoFactoryInterface
{
}
