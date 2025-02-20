<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\tree\tree\TreeInterface;

/**
 * Class TreenodeFactoryInterface
 * @template PayloadType
 */
interface TreenodeFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeInterface<PayloadType>
     */
    public function makeNode(): TreenodeInterface;

    /**
     * @param TreeInterface<PayloadType> $tree
     * @return void
     *
     * TreenodeFactory and Tree have reciprocal pointers and therefore a circular dependency.  The initialize
     * method is present so that the TreenodeFactory can be created and then the TreeFactory, in the process of
     * creating the tree, also initializes the TreenodeFactory (e.g. sets the reciprocal pointer)
     */
    public function initialize(TreeInterface $tree): void;

    /**
     * @return bool
     */
    public function isInitialized(): bool;

    /**
     * @return TreenodeCollectionFactoryInterface<PayloadType>
     * this is in here for an edge case where someone is trying to get the siblings of the root node of the tree.
     * Because root has no siblings (e.g. there is no parent and thus there is no collection of siblings) we need
     * to be abel to make an empty Collection to return when someone asks for the siblings of the root.
     */
    public function getTreenodeCollectionFactory(): TreenodeCollectionFactoryInterface;
}
