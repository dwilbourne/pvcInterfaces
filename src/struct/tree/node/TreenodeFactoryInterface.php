<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionFactoryInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;

/**
 * Class TreenodeFactoryInterface
 */
interface TreenodeFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeInterface
     */
    public function makeNode(): TreenodeInterface;

    public function initialize(TreeInterface $tree): void;

    /**
     * @return CollectionFactoryInterface<TreenodeInterface>
     */
    public function getTreenodeCollectionFactory(): CollectionFactoryInterface;
}
