<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\config;

/**
 * Class XCodePrefixesInterface
 */
interface XCodePrefixesInterface
{
    /**
     * getXCodePrefix
     * @param string $namespace
     * @return int
     */
    public static function getXCodePrefix(string $namespace): int;

    /**
     * getXCodePrefixes
     * @return array<string, positive-int>
     */
    public static function getXCodePrefixes(): array;

    /**
     * getPvcXCodePrefixes
     * @return array<string, positive-int>
     */
    public static function getPvcXCodePrefixes(): array;

    /**
     * getExternalXCodePrefixes
     * @return array<string, positive-int>
     */
    public static function getExternalXCodePrefixes(): array;
}
