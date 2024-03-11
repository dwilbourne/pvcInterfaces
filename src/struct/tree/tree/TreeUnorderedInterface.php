<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\ValidatorPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;

/**
 * Interface TreeInterface
 *
 * @template ValueType of ValidatorPayloadInterface
 * @phpcs:ignore -- generics must all be on one line to be processed correctly
 * @extends TreeAbstractInterface<ValueType, TreenodeUnorderedInterface, TreeUnorderedInterface, CollectionUnorderedInterface>
 */
interface TreeUnorderedInterface extends TreeAbstractInterface
{
}
