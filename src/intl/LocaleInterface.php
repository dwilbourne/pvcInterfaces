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
     * exists
     * @param string $locale
     * @return bool
     */
    public static function exists(string $locale): bool;

}
