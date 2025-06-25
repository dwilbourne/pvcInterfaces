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
     * @param  TreeInterface<PayloadType>  $tree
     *
     * @return void
     */
    public function initialize(TreeInterface $tree): void;

    /**
     * @return CollectionFactoryInterface<TreenodeInterface<PayloadType>>
     */
    public function getTreenodeCollectionFactory(): CollectionFactoryInterface;
}
