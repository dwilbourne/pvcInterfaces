<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use ArrayIterator;
use Countable;
use Iterator;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 * @extends Iterator<NodeIdType, TreenodeDtoInterface>
 */
interface TreenodeDtoCollectionInterface extends Iterator, Countable
{
    /**
     * initialize
     * @param  ArrayIterator<NodeIdType, TreeIdType>|null  $iterator
     * @return void
     */
    public function initialize(?ArrayIterator $iterator = null): void;

    /**
     * isEmpty
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * getRoot
     * @return ?TreenodeDtoInterface<NodeIdType, TreeIdType>
     */
    public function getRoot(): ?TreenodeDtoInterface;

    /**
     * getDto
     * @param NodeIdType $nodeId
     *
     * @return TreenodeDtoInterface<NodeIdType, TreeIdType>
     */
    public function getDto($nodeId): TreenodeDtoInterface;

    /**
     * getChildKeysOf
     * @param TreenodeDtoInterface<NodeIdType, TreeIdType> $dto
     * @return array<NodeIdType>
     */
    public function getChildKeysOf(TreenodeDtoInterface $dto): array;

    /**
     * add
     * @param NodeIdType $nodeId
     * @param  TreenodeDtoInterface<NodeIdType, TreeIdType>  $dto
     *
     * @return void
     */
    public function add(int|string $nodeId, TreenodeDtoInterface $dto): void;

    /**
     * getElements
     * @return array<non-negative-int, TreenodeDtoInterface<NodeIdType, TreeIdType>>
     */
    public function getElements(): array;
}