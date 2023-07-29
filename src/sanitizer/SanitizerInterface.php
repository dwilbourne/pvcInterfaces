<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\sanitizer;

/**
 * Interface SanitizerInterface
 */
interface SanitizerInterface
{
    // sanitizers must never fail so there are no provisions for returning true if it succeeds or false if it fails
    // TODO: decide whether to assume that all output from this framework is being consumed by a UTF-8 oriented
    // agent or whether sanitizing needs to account for character encoding.

    /**
     * sanitize
     * @param string $var
     * @return string
     */
    public function sanitize(string $var): string;
}
