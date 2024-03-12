<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;

/**
 * Interface TreeOrderedInterface
 *
 * @template ValueType of HasPayloadInterface
 * @extends TreeAbstractInterface<ValueType, TreenodeOrderedInterface, TreeOrderedInterface, CollectionOrderedInterface>
 */
interface TreeOrderedInterface extends TreeAbstractInterface
{
}
