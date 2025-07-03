<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionFactoryInterface;
use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;

/**
 * Class TreenodeFactoryInterface
 * @template PayloadType
 * @template TreenodeType of TreenodeInterface
 * @template TreeType of TreeInterface
 * @template CollectionType of CollectionInterface
 */
interface TreenodeFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeType
     */
    public function makeNode(): TreenodeInterface;

    /**
     * @param  TreeInterface<PayloadType, TreenodeType, TreeType, CollectionType>  $tree
     *
     * @return void
     */
    public function initialize(TreeInterface $tree): void;

    /**
     * @return CollectionFactoryInterface<TreenodeType, CollectionType>
     */
    public function getTreenodeCollectionFactory(): CollectionFactoryInterface;
}
