<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

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
     * @function getXCodePrefix returns the integer "prefix" corresponding to an exception library.
     *
     * Prefixes are
     *
     * @param string $namespace
     * @return int|false
     */
    public function getXCodePrefix(string $namespace): int|false;

    /**
     * @function getXCodePrefixes returns an array of exception code prefixes.
     *
     * @param XCodeDataType $dataType
     *
     * specify XCodeDataType::PVC_PREFIXES or XCodeDataType::APP_PREFIXES as
     * the parameter
     *
     * The keys in the array are the namespaces of the exception libraries.
     *
     * @return array<string, int>
     */
    public function getXCodePrefixes(XCodeDataType $dataType): array;
}
