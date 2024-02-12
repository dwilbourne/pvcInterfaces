<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\parser;

/**
 * Class ParserQueryStringInterface
 */
interface ParserQueryStringInterface extends ParserInterface
{
    /**
     * setParams
     * @param array<string, string> $params
     */
    public function setParams(array $params): void;
}
