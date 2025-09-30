<?php

namespace pvc\interfaces\http\uri;

use League\Uri\Contracts\UriInterface as LeagueUriInterface;

/**
 * the PSR-7 interface is a collection of 'get' and 'with' methods, each
 * of which pertain to the different pieces of a uri.  For example, there is
 * 'getScheme' and 'withScheme'.  The standard says that the Uri is immutable,
 * so 'modification' is implemented by creating a copy with one of the pieces
 * modified.  E.g. $uri->withScheme('https') returns a new uri object where
 * the scheme is 'https'.  You would think there are getUserName/withUserName
 * and getPassword/withPassword, but they are condensed into getAuthority/
 * withAuthority.
 *
 * The League package extends the PSR-7 interface with the following methods:
 *
 * resolve
 *
 * getUsername
 * withUserName
 *
 * getPassword
 * withPassword
 *
 * normalize
 * relativize
 *
 * getComponents
 * toComponents
 *
 * jsonSerialize
 * toString
 *
 * @see https://uri.thephpleague.com/uri/7.0/rfc3986/
 *
 */
interface UriInterface extends LeagueUriInterface
{
}