<?php

namespace pvc\interfaces\http\uri;

use League\Uri\Contracts\QueryInterface;

/**
 * There is no PSR for a querystring interface per se.  There is some manipulation
 * of querystrings available through the ServerRequestInterface, but it is really
 * referring to a server-specific environment in the context of a request.
 *
 * So... using the League's interface.
 *
 * Guzzle does not have a query object per se.  It can extract the query as a
 * string from a Uri via its own Uri object.  For requests, there are several
 * options for injecting query parameters, none of which are object oriented.
 * @see https://docs.guzzlephp.org/en/stable/quickstart.html#query-string-parameters
 */
interface QueryStringInterface extends QueryInterface
{
}