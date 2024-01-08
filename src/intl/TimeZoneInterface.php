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
     * exists
     * @param string $tz
     * @return bool
     */
    public static function exists(string $tz): bool;

    /**
     * getRawOffset
     * @param string $tz
     * @return int
     */
    public static function getRawOffset(string $tz): int;

}
