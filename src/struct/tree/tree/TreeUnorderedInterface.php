<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;

/**
 * Interface TreeInterface
 *
 * @template ValueType
 * @extends TreeAbstractInterface<ValueType, TreenodeUnorderedInterface, CollectionUnorderedInterface>
 */
interface TreeUnorderedInterface extends TreeAbstractInterface
{
}
