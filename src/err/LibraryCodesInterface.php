<?php

/**
 * @package pvcErr
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare (strict_types=1);

namespace pvc\interfaces\err;

interface LibraryCodesInterface
{
    /**
     * getLibraryCode
     * @param class-string $exceptionClassString
     * @return int
     */
    public function getLibraryCode(string $exceptionClassString) : int;
}