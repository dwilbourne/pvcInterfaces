<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;

/**
 * Interface TreeOrderedInterface
 *
 * @template PayloadType of HasPayloadInterface
 * @template ValueObjectType of TreenodeValueObjectInterface
 * @phpcs ignore-next-line
 * @extends TreeAbstractInterface<PayloadType, TreenodeOrderedInterface, TreeOrderedInterface, CollectionOrderedInterface, ValueObjectType>
 */
interface TreeOrderedInterface extends TreeAbstractInterface
{
}
