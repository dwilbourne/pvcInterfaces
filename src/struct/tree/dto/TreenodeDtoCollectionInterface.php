<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use Iterator;
use pvc\interfaces\struct\tree\node\TreenodeInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * @template NodeIdType of array-key
 * @template NodeType of TreenodeInterface
 * @template TreeIdType of array-key
 * @template TreeType of TreeInterface
 * @extends Iterator<NodeIdType, TreenodeDtoInterface>
 */
interface TreenodeDtoCollectionInterface extends Iterator
{
    public function isEmpty(): bool;

    /**
     * getRoot
     * @return TreenodeDtoInterface<NodeIdType, NodeType, TreeIdType, TreeType>
     */
    public function getRoot(): TreenodeDtoInterface;

    /**
     * getDto
     * @param NodeIdType $nodeId
     *
     * @return TreenodeDtoInterface<NodeIdType, NodeType, TreeIdType, TreeType>
     */
    public function getDto($nodeId): TreenodeDtoInterface;

    /**
     * getDtos
     * @param  ValTesterInterface<TreenodeDtoInterface<NodeIdType, NodeType, TreeIdType, TreeType>>  $valTester
     *
     * @return TreenodeDtoCollectionInterface<NodeIdType, NodeType, TreeIdType, TreeType>
     */
    public function getDtos(ValTesterInterface $valTester): TreenodeDtoCollectionInterface;
}