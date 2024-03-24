<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectUnorderedInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;
use pvc\interfaces\struct\tree\tree\TreeUnorderedInterface;

/**
 * Interface TreenodeUnorderedInterface defines the operations for "unordered" tree nodes, e.g. the children of a node
 * are not kept in any specific order.
 *
 * @template PayloadType of HasPayloadInterface
 * @template ValueObjectType of TreenodeValueObjectInterface
 * @phpcs:ignore -- generics must all be on one line to be processed correctly
 * @extends TreenodeAbstractInterface<PayloadType, TreenodeUnorderedInterface, TreeUnorderedInterface, CollectionUnorderedInterface, ValueObjectType>
 */
interface TreenodeUnorderedInterface extends TreenodeAbstractInterface
{
    /**
     * hydrate
     * @param TreenodeValueObjectUnorderedInterface<PayloadType> $valueObject
     * @param TreeUnorderedInterface<PayloadType> $tree
     */
    public function hydrate(TreenodeValueObjectInterface $valueObject, TreeAbstractInterface $tree): void;
}
