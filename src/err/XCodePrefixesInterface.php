<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare (strict_types=1);

namespace pvc\interfaces\err;

/**
 * XCodePrefixes are what guarantee the uniqueness of exception codes *between* exception libraries.
 *
 * "Local" exception codes are guaranteed to be unique within an exception library.  Each exception librarty has its own
 * unique prefix. Prepending the library prefix to a local exception guarantees the global uniqueness of the exception
 * code.
 */
interface XCodePrefixesInterface
{
    /**
     * @function getXCodePrefix returns the "prefix" corresponding to an exception library.
     *
     * Prefixes are
     *
     * @param string $namespace
     * @return int
     */
    public static function getXCodePrefix(string $namespace): int;

    /**
     * @function getXCodePrefixes returns an array of exception code prefixes.
     *
     * The key in the array is the namespace of the exception library.
     *
     * @return array<class-string, int>
     */
    public static function getXCodePrefixes(): array;
}