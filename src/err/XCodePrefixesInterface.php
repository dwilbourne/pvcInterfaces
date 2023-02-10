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
     * @function getXCodePrefix
     * @param string $namespace
     * @return int
     */
    public function getXCodePrefix(string $namespace) : int;

    /**
     * @function getXCodePrefixes
     * @return array<string, int>
     */
    public function getXCodePrefixes() : array;
}