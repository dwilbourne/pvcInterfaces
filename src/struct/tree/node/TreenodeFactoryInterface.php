<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;

/**
 * Class TreenodeFactoryInterface
 * @template TreenodeType of TreenodeInterface
 * @template CollectionType of CollectionOrderedInterface
 */
interface TreenodeFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeType
     */
    public function makeNode();

    /**
     * @return CollectionType
     */
    public function makeCollection();
}
