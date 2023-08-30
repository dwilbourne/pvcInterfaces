<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare (strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;

/**
 * Interface TreeOrderedInterface
 *
 * @template ValueType
 * @extends TreeAbstractInterface<ValueType, TreenodeOrderedInterface, CollectionOrderedInterface>
 */
interface TreeOrderedInterface extends TreeAbstractInterface
{
}
