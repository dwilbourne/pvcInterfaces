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
     * setScheme
     * @param string $scheme
     */
    public function setScheme(string $scheme): void;

    /**
     * getScheme
     * @return string
     */
    public function getScheme(): string;

    /**
     * setHost
     * @param string $host
     */
    public function setHost(string $host): void;

    /**
     * getHost
     * @return string
     */
    public function getHost(): string;

    /**
     * setPort
     * @param int|string $port
     */
    public function setPort(int|string $port): void;

    /**
     * getPort
     * @return string
     */
    public function getPort(): string;

    /**
     * setUser
     * @param string $user
     */
    public function setUser(string $user): void;

    /**
     * getUser
     * @return string
     */
    public function getUser(): string;

    /**
     * setPassword
     * @param string $pwd
     */
    public function setPassword(string $pwd): void;

    /**
     * getPassword
     * @return string
     */
    public function getPassword(): string;

    /**
     * setPath
     * @param string $path
     */
    public function setPath(string $path): void;

    /**
     * getPath
     * @return string
     */
    public function getPath(): string;

    /**
     * setQuery
     * @param string $queryString
     */
    public function setQuery(string $queryString): void;

    /**
     * getQuery
     * @return string
     */
    public function getQuery(): string;

    /**
     * setFragment
     * @param string $fragment
     */
    public function setFragment(string $fragment): void;

    /**
     * getFragment
     * @return string
     */
    public function getFragment(): string;

    /**
     * setAttributesFromArray
     * @param array<string, string|int<0, 65535>> $urlParts
     */
    public function setAttributesFromArray(array $urlParts): void;

    /**
     * generateURLString
     * @param bool $encoded
     * @return string
     */
    public function generateURLString(bool $encoded = true): string;
}
