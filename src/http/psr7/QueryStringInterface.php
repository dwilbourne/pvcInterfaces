<?php

namespace pvc\interfaces\http\psr7;

use League\Uri\Contracts\QueryInterface;

/**
 * There is no PSR for a querystring interface per se.  There is some manipulation
 * of querystrings available through the ServerRequestInterface, but it is really
 * referring to a server-specific environment in the context of a request.
 *
 * So... pvc uses the League's interface, which is rather extensive.
 *
 * Other choices could have been homegrown or use a very simple interface
 * that exposes the methods Guzzle implements in its Psr7 Query object.  The
 * League's interface appears quite robust and is actively maintained.
 */
interface QueryStringInterface extends QueryInterface
{
}