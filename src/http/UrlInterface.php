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
     * getScheme
     * @return string
     */
    public function getScheme(): string;

    /**
     * getHost
     * @return string
     */
    public function getHost(): string;

    /**
     * getPort
     * @return string
     */
    public function getPort(): string;

    /**
     * getUser
     * @return string
     */
    public function getUser(): string;

    /**
     * getPassword
     * @return string
     */
    public function getPassword(): string;

    /**
     * getPath
     * @return string
     */
    public function getPath(): string;

    /**
     * getQuery
     * @return QueryStringInterface
     */
    public function getQueryString(): QueryStringInterface;

    /**
     * getFragment
     * @return string
     */
    public function getFragment(): string;

    /**
     * hydrate
     * @param string $url
     */
    public function hydrate(string $url): void;

    /**
     * generateURLString
     * @param bool $encoded
     * @return string
     */
    public function generateURLString(bool $encoded = true): string;
}
