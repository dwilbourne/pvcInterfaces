<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class SearchInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template ValueObjectType of TreenodeValueObjectInterface
 * @extends NodeTravelerInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType>
 */
interface SearchInterface extends NodeTravelerInterface
{
    /**
     * getNodes
     * gets all the nodes at once
     * @return array<int, TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType>>
     */
    public function getNodes(): array;
}
