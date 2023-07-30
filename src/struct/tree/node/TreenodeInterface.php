<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

/**
 * Interface TreenodeInterface defines the operations for "unordered" tree nodes, e.g. the children of a node are not
 * kept in any specific order.
 *
 * @template NodeValueType
 * @extends TreenodeAbstractInterface<TreenodeInterface, NodeValueType>
 */
interface TreenodeInterface extends TreenodeAbstractInterface
{
}
