<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

/**
 * Class TreenodeFactoryInterface
 * @template TreenodeType
 * @template CollectionType
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
