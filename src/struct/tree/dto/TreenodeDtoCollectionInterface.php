<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\tree\node\TreenodeInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * @template NodeIdType of array-key
 * @template NodeType of TreenodeInterface
 * @template TreeIdType of array-key
 * @template TreeType of TreeInterface
 */
interface TreenodeDtoCollectionInterface
{

    public function isEmpty(): bool;

    /**
     * getElement
     * @param NodeIdType $nodeId
     *
     * @return TreenodeDtoInterface<NodeIdType, NodeType, TreeIdType, TreeType>
     */
    public function getElement($nodeId): TreenodeDtoInterface;

    /**
     * findElementKeys
     * @param  ValTesterInterface<NodeIdType>  $valTester
     *
     * @return array<NodeIdType>
     */
    public function findElementKeys(ValTesterInterface $valTester): array;
}