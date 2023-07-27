<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection;

use DateTime;

/**
 * @interface RangeElementDateTimeInterface
 * @template RangeElementType
 * @extends RangeElementInterface<DateTime>
 */
interface RangeElementDateTimeInterface extends RangeElementInterface
{
    /**
     * @return array<DateTime>
     */
    public function getRange(): array;

    /**
     * @return DateTime
     */
    public function getMin(): DateTime;

    /**
     * @return DateTime
     */
    public function getMax(): DateTime;
}
