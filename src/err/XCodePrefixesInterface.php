<?php

/**
 * @package pvcErr
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare (strict_types=1);

namespace pvc\interfaces\err;

/**
 * Interface XCodePrefixesInterface
 * @package pvc\interfaces\err
 */
interface XCodePrefixesInterface
{
    /**
     * @function getXCodePrefix returns the "prefix" corresponding to an exception library.
     *
     * Prefixes are what guarantee the uniqueness of exception codes *between* exception libraries.  "Local" exception
     * codes are guaranteed to be unique within an exception library.  Prepending the prefix to a local exception
     * code when generating the exception guarantees its global uniqueness.
     *
     * @param string $namespace
     * @return int
     */
    public static function getXCodePrefix(string $namespace) : int;

    /**
     * @function getXCodePrefixes returns an array of exception code prefixes.
     *
     * The key in the array is the namespace of the exception library.
     *
     * @return array<class-string, int>
     */
    public static function getXCodePrefixes() : array;
}