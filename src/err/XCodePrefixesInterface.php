<?php

/**
 * @package pvcErr
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare (strict_types=1);

namespace pvc\interfaces\err;

interface XCodePrefixesInterface
{
    /**
     * getLibraryCode
     * @param string $namespace
     * @return int
     */
    public function getLibraryCodePrefix(string $namespace) : int;

    /**
     * getLibraryCodes
     * @return array<string, int>
     */
    public function getLibraryCodePrefixes() : array;
}