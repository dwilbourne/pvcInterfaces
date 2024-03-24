<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree\events;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\tree\TreeOrderedInterface;

/**
 * Class TreeOrderedEventHandlerInterface
 * @template PayloadType of HasPayloadInterface
 * @template ValueObjectType of TreenodeValueObjectInterface
 * @phpcs:ignore -- generics must all be on one line to be processed correctly
 * @extends TreeAbstractEventHandlerInterface<PayloadType, TreenodeOrderedInterface, TreeOrderedInterface, CollectionOrderedInterface, ValueObjectType>
 */
interface TreeOrderedEventHandlerInterface extends TreeAbstractEventHandlerInterface
{
}
