<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOUnorderedInterface;
use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;

/**
 * Interface TreeInterface
 *
 * @template PayloadType of HasPayloadInterface
 * @phpcs:ignore -- generics must all be on one line to be processed correctly
 * @extends TreeAbstractInterface<PayloadType, TreenodeUnorderedInterface, TreeUnorderedInterface, CollectionUnorderedInterface, TreenodeDTOUnorderedInterface>
 */
interface TreeUnorderedInterface extends TreeAbstractInterface
{
}
