<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection;

use DateTime;
use DateTimeImmutable;

/**
 * @interface RangeElementDateTimeInterface
 * @extends RangeElementInterface<RangeElementDateTimeInterface, DateTime|DateTimeImmutable>
 */
interface RangeElementDateTimeInterface extends RangeElementInterface
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
