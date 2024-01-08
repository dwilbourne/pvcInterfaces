<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\intl;

/**
 * Class CharsetInterface
 */
interface CharsetInterface
{
    /**
     * getPhpCharsets
     * @return array<int, string>
     */
    public static function getPhpCharsets(): array;

    /**
     * isValid
     * @param string $charset
     * @return bool
     */
    public static function isValid(string $charset): bool;
}
