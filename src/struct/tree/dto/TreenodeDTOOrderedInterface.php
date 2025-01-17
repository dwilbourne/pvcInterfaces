<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
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
     * hydrateFromNode
     * @phpcs:ignore
     * @param TreenodeOrderedInterface<PayloadType> $node
     */
    public function hydrateFromNode(TreenodeAbstractInterface $node): void;

    /**
     * hydrateFromArray
     * @param NodeDataOrdered $values
     */
    public function hydrateFromArray(array $values): void;

    public function getIndex(): int;
}
