<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeDTOOrderedInterface;

/**
 * Interface TreeOrderedInterface
 *
 * @template PayloadType of HasPayloadInterface
 * @phpcs:ignore  -- generics must all be on one line to be processed correctly
 * @extends TreeAbstractInterface<PayloadType, TreenodeOrderedInterface, TreeOrderedInterface, CollectionOrderedInterface, TreenodeDTOOrderedInterface>
 */
interface TreeOrderedInterface extends TreeAbstractInterface
{
}
