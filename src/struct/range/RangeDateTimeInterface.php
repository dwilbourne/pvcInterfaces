<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range;

use DateTime;
use DateTimeImmutable;

/**
 * @interface RangeElementDateTimeInterface is the DateTime-based interface for a RangeElement.
 * @extends RangeInterface<RangeDateTimeInterface, DateTime|DateTimeImmutable>
 */
interface RangeDateTimeInterface extends RangeInterface
{
    /**
     * @return array<DateTime|DateTimeImmutable>
     */
    public function getRange(): array;

    /**
     * @return DateTime|DateTimeImmutable
     */
    public function getMin(): DateTime|DateTimeImmutable;

    /**
     * @return DateTime|DateTimeImmutable
     */
    public function getMax(): DateTime|DateTimeImmutable;
}
