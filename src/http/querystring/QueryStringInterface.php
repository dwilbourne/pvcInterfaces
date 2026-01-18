<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http\querystring;

/**
 * Class QueryStringInterface
 *
 * almost the same as 'is_scalar' but includes null
 * @phpstan-type QstrParamValue string|int|float|bool|null
 */
interface QueryStringInterface
{
    /**
     * setSeparator
     * @param  string  $separator
     * @return void
     */
    public function setSeparator(string $separator): void;

    /**
     * setQueryEncoding
     * the older standard is PHP_RFC1738 and the newer standard is PHP_RFC986
     * @param int $encoding
     */
    public function setQueryEncoding(int $encoding): void;

    /**
     * setParams
     * @param array<QueryStringParamInterface> $params
     */
    public function setParams(array $params): void;

    /**
     * setParam
     * @param string $paramName
     * @param mixed $paramValue
     */
    public function setParam(string $paramName, $paramValue): void;

    /**
     * getParams
     * @return array<int, QueryStringParamInterface>
     */
    public function getParams(): array;

    /**
     * parse
     * @param  string  $queryString
     * @return void
     */
    public function parse(string $queryString): void;

    /**
     * render
     * @return string
     */
    public function render(): string;
}
