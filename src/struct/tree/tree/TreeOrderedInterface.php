<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare (strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\lists\ListOrderedInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;

/**
 * Interface TreeOrderedInterface
 *
 * @template NodeValueType
 * @extends TreeAbstractInterface<TreenodeOrderedInterface, NodeValueType, ListOrderedInterface>
 */
interface TreeOrderedInterface extends TreeAbstractInterface
{
}