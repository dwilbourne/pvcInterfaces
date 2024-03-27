<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node\factory;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;

/**
 * Class TreenodeUnorderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 */
interface TreenodeUnorderedFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeUnorderedInterface<PayloadType>
     */
    public function makeNode(): TreenodeUnorderedInterface;
}
