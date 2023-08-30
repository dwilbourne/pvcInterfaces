<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\tree\tree\TreeUnorderedInterface;

/**
 * Interface TreenodeUnorderedInterface defines the operations for "unordered" tree nodes, e.g. the children of a node
 * are not kept in any specific order.
 *
 * @template ValueType
 * @extends TreenodeAbstractInterface<ValueType, TreenodeUnorderedInterface, TreeUnorderedInterface,
 *     CollectionUnorderedInterface>
 */
interface TreenodeUnorderedInterface extends TreenodeAbstractInterface
{
}
