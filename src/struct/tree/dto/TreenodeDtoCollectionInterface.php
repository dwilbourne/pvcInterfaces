<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use Iterator;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 * @extends Iterator<NodeIdType, TreenodeDtoInterface>
 */
interface TreenodeDtoCollectionInterface extends Iterator
{
    public function isEmpty(): bool;

    /**
     * getRoot
     * @return TreenodeDtoInterface<NodeIdType, TreeIdType>
     */
    public function getRoot(): TreenodeDtoInterface;

    /**
     * getDto
     * @param NodeIdType $nodeId
     *
     * @return TreenodeDtoInterface<NodeIdType, TreeIdType>
     */
    public function getDto($nodeId): TreenodeDtoInterface;

    /**
     * getDtos
     * @param  ValTesterInterface<TreenodeDtoInterface<NodeIdType, TreeIdType>>  $valTester
     *
     * @return TreenodeDtoCollectionInterface<NodeIdType, TreeIdType>
     */
    public function getDtos(ValTesterInterface $valTester): TreenodeDtoCollectionInterface;
}