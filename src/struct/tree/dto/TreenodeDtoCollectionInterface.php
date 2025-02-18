<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\collection\CollectionInterface;

/**
 * @template PayloadType
 * @extends CollectionInterface<TreenodeDtoInterface<PayloadType>>
 */
interface TreenodeDtoCollectionInterface extends CollectionInterface
{
}
