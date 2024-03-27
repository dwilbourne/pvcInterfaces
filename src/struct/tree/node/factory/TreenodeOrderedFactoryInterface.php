<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node\factory;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;

/**
 * Class TreenodeOrderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 */
interface TreenodeOrderedFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeOrderedInterface<PayloadType>
     */
    public function makeNode(): TreenodeOrderedInterface;
}
