<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use Iterator;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 * @extends Iterator<NodeIdType, TreenodeDtoInterface>
 */
interface TreenodeDtoCollectionInterface extends Iterator
{
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
     * filter
     * @param  callable $callback
     *
     * @return TreenodeDtoCollectionInterface<NodeIdType, TreeIdType>
     */
    public function filter(callable $callback): TreenodeDtoCollectionInterface;

    /**
     * getChildren
     * @return TreenodeDtoCollectionInterface<NodeIdType, TreeIdType>
     */
    public function getChildren(): TreenodeDtoCollectionInterface;

    /**
     * add
     * @param  TreenodeDtoInterface<NodeIdType, TreeIdType>  $dto
     *
     * @return void
     */
    public function add(TreenodeDtoInterface $dto): void;
}