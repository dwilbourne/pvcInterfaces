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
 * @template TreenodeType of TreenodeInterface
 * @template CollectionType of CollectionInterface
 * @template TreeType of TreeInterface
 */
interface TreenodeFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeType
     */
    public function makeNode(): TreenodeInterface;

    /**
     * @param  TreeType  $tree
     *
     * @return void
     */
    public function setTree(TreeInterface $tree): void;

    /**
     * @return TreeType
     */
    public function getTree(): TreeInterface;

    /**
     * @return CollectionFactoryInterface<TreenodeType, CollectionType>
     */
    public function getTreenodeCollectionFactory(): CollectionFactoryInterface;
}
