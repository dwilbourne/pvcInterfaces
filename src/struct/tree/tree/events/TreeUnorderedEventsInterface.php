<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree\events;

use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;
use pvc\interfaces\struct\tree\tree\TreeUnorderedInterface;

/**
 * Class TreeUnorderedEventsInterface
 *
 * @template ValueType
 * @phpcs:ignore -- generics must all be on one line to be processed correctly
 * @extends TreeAbstractEventsInterface<ValueType, TreenodeUnorderedInterface, TreeUnorderedInterface,
 *     CollectionUnorderedInterface>
 */
interface TreeUnorderedEventsInterface extends TreeAbstractEventsInterface
{
}
