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
    public function setScheme(string $scheme): void;

    public function getScheme(): string;

    public function setHost(string $host): void;

    public function getHost(): string;

    public function setPort(int|string $port): void;

    public function getPort(): string;

    public function setUser(string $user): void;

    public function getUser(): string;

    public function setPassword(string $pwd): void;

    public function getPassword(): string;

    public function setPath(string $path): void;

    public function getPath(): string;

    public function setQuery(string $queryString): void;

    public function getQuery(): string;

    public function setFragment(string $fragment): void;

    public function getFragment(): string;

    public function setAttributesFromArray(array $urlParts): void;

    public function generateURLString(bool $encoded = true): string;
}
