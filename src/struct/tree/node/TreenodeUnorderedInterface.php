<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\tree\TreeUnorderedInterface;

/**
 * Interface TreenodeUnorderedInterface defines the operations for "unordered" tree nodes, e.g. the children of a node
 * are not kept in any specific order.
 *
 * @template PayloadType of HasPayloadInterface
 * @phpcs:ignore -- generics must all be on one line to be processed correctly
 * @extends TreenodeAbstractInterfaceHasHas<PayloadType, TreenodeUnorderedInterface, TreeUnorderedInterface, CollectionUnorderedInterface>
 */
interface TreenodeUnorderedInterface extends TreenodeAbstractInterfaceHasHas
{
}
