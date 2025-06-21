<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

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
}
