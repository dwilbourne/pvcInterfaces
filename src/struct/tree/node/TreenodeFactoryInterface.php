<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class TreenodeFactoryInterface
 * @template PayloadType of HasPayloadInterface
 */
interface TreenodeFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeInterface<PayloadType>
     */
    public function makeNode(): TreenodeInterface;
}
