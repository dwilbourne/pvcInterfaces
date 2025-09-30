<?php

namespace pvc\interfaces\http\uri;

use League\Uri\Contracts\UriInterface as LeagueUriInterface;

interface UriInterface extends LeagueUriInterface
{
    /**
     * render
     * @return string
     */
    public function render(): string;
}