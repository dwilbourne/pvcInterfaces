<?php

namespace pvc\interfaces\http\uri;

use League\Uri\Contracts\QueryInterface;

/**
 * There is no PSR for a querystring interface per se.  There is some manipulation
 * of querystrings available through the ServerRequestInterface, but it is really
 * referring to a server-specific environment in the context of a request.
 *
 * So... using the League's interface
 */
interface QueryStringInterface extends QueryInterface
{

}