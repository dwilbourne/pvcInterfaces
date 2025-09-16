<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http;

/**
 * Class UrlInterface
 */
interface UrlInterface
{
    /**
     * getQuery
     * @return QueryStringInterface
     */
    public function getQueryString(): QueryStringInterface;

    /**
     * hydrate
     * all the array values are strings except the port number
     * @param array<string|non-negative-int> $urlParts
     */
    public function hydrateFromArray(array $urlParts): void;

    /**
     * parse
     * @param  string  $url
     * @return void
     */
    public function parse(string $url): void;

    /**
     * render
     * @param bool $validateBeforeRender
     * @return string
     */
    public function render(bool $validateBeforeRender = true): string;
}
