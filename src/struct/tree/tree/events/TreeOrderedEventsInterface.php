<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree\events;

use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;
use pvc\interfaces\struct\tree\tree\TreeOrderedInterface;

/**
 * Class TreeOrderedEventsInterface
 * @template ValueType
 * @phpcs:ignore -- generics must all be on one line to be processed correctly
 * @extends TreeAbstractEventsInterface<ValueType, TreenodeOrderedInterface, TreeOrderedInterface,
 *     CollectionOrderedInterface>
 */
interface TreeOrderedEventsInterface extends TreeAbstractEventsInterface
{
}
