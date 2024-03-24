<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree\events;

use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\tree\TreeUnorderedInterface;

/**
 * Class TreeUnorderedEventHandlerInterface
 *
 * @template PayloadType of HasPayloadInterface
 * @template ValueObjectType of TreenodeValueObjectInterface
 * @phpcs:ignore -- generics must all be on one line to be processed correctly
 * @extends TreeAbstractEventHandlerInterface<PayloadType, TreenodeUnorderedInterface, TreeUnorderedInterface, CollectionUnorderedInterface, ValueObjectType>
 */
interface TreeUnorderedEventHandlerInterface extends TreeAbstractEventHandlerInterface
{
}
