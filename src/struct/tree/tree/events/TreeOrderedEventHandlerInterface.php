<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree\events;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\payload\ValidatorPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;
use pvc\interfaces\struct\tree\tree\TreeOrderedInterface;

/**
 * Class TreeOrderedEventHandlerInterface
 * @template ValueType of ValidatorPayloadInterface
 * @phpcs:ignore -- generics must all be on one line to be processed correctly
 * @extends TreeAbstractEventHandlerInterface<ValueType, TreenodeOrderedInterface, TreeOrderedInterface, CollectionOrderedInterface>
 */
interface TreeOrderedEventHandlerInterface extends TreeAbstractEventHandlerInterface
{
}
