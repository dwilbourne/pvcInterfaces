<?php

/**
 * @package pvcErr
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare (strict_types=1);

namespace pvc\interfaces\err;

interface ExceptionLibraryCodePrefixesInterface
{
    /**
     * getLibraryCode
     * @param class-string $exceptionClassString
     * @return int
     */
    public function getLibraryCodePrefix(string $exceptionClassString) : int;

    /**
     * getLibraryCodes
     * @return array<string, int>
     */
    public function getLibraryCodePrefixes() : array;
}