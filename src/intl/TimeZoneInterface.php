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
     * setTimeZoneString
     * @param string $tzString
     */
    public function setTimeZoneString(string $tzString): void;

    /**
     * getTimeZoneString
     * @return string
     */
    public function getTimeZoneString(): string;

    /**
     * exists
     * @param string $tzString
     * @return bool
     */
    public static function exists(string $tzString): bool;

    /**
     * __toString
     * @return string
     */
    public function __toString(): string;

    /**
     * getRawOffset
     * @param int|null $timeStamp
     * @return int
     */
    public function getRawOffset(int $timeStamp = null): int;
}
