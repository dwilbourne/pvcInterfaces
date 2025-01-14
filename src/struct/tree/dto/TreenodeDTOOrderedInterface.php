<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;
use pvc\interfaces\struct\tree\tree\TreeOrderedInterface;

/**
 * Class TreenodeDTOOrderedInterface
 * @template PayloadType of HasPayloadInterface
 * @phpcs:ignore
 * @phpstan-type NodeDataOrdered array{'nodeId': non-negative-int,'parentId': non-negative-int|null,'treeId':non-negative-int,'payload': PayloadType,'index':non-negative-int }
 * @phpcs:ignore
 * @extends TreenodeDTOInterface<PayloadType, TreenodeOrderedInterface, TreeOrderedInterface, CollectionOrderedInterface, TreenodeDTOOrderedInterface>
 */
interface TreenodeDTOOrderedInterface extends TreenodeDTOInterface
{
    /**
     * hydrateFromArray
     * @param NodeDataOrdered $nodeData
     */
    public function hydrateFromArray(array $nodeData): void;
}
