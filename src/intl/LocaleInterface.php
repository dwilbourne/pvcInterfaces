<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\intl;

/**
 * Class LocaleInterface
 */
interface LocaleInterface
{
    /**
     * setLocaleString
     * @param string $localeString
     */
    public function setLocaleString(string $localeString): void;

    /**
     * getLocaleString
     * @return string
     */
    public function getLocaleString(): string;

    /**
     * timeZoneNameExists
     * @param string $locale
     * @return bool
     */
    public static function exists(string $locale): bool;

    /**
     * __toString
     * @return mixed
     */
    public function __toString();

}
