<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\parser;

use pvc\interfaces\http\QueryStringInterface;

/**
 * Class ParserQueryStringInterface
 */
interface ParserQueryStringInterface extends ParserInterface
{
    /**
     * setQueryString
     * @param QueryStringInterface $queryString
     */
    public function setQueryString(QueryStringInterface $queryString): void;

    /**
     * getQueryString
     * @return QueryStringInterface
     */
    public function getQueryString(): QueryStringInterface;
}
