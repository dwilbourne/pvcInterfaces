<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use Countable;
use Iterator;

/**
 * @template PayloadType
 * @extends Iterator<non-negative-int, TreenodeDtoInterface<PayloadType>>
 */
interface TreenodeDtoCollectionInterface extends Iterator, Countable
{
}
