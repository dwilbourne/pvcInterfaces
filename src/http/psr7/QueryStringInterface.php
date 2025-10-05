<?php

namespace pvc\interfaces\http\psr7;


/**
 * There is no PSR for a querystring interface per se.  There is some manipulation
 * of querystrings available through the ServerRequestInterface, but it is really
 * referring to a server-specific environment in the context of a request.
 *
 * So... pvc defines a simple interface which mirrors the methods in guzzle's
 * querystring object.
 *
 * Other choices could have been homegrown or use something like The
 * League's interface, which appears quite robust but rather more complicated.
 */
interface QueryStringInterface
{
    /**
     * parse
     * @param  string  $str
     * @param  bool|int  $urlEncoding
     *
     * @return array<array-key, mixed>
     */
    public static function parse(string $str, bool|int $urlEncoding = true): array;

    /**
     * build
     * @param  array<mixed>  $params
     * @param  false|int  $encoding
     * @param  bool  $treatBoolsAsInts
     *
     * @return string
     */
    public static function build(array $params, false|int $encoding = PHP_QUERY_RFC3986, bool $treatBoolsAsInts = true): string;
}