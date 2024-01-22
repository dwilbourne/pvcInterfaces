<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\intl;

/**
 * Class TimeZoneInterface
 */
interface TimeZoneInterface
{
    /**
     * __toString
     * @return string
     */
    public function __toString(): string;

    /**
     * getRawOffset
     * @param string $tz
     * @return int
     */
    public function getRawOffset(int $timeStamp = null): int;

}
