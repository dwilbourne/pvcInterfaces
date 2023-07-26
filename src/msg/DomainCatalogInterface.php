<?php

/**
 * @package pvcInterfaces
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * Interface DomainCatalogInterface
 */
interface DomainCatalogInterface
{
	/**
     * getDomain
     * @return string
     */
	public function getDomain(): string;

	/**
	 * getLocale
	 * @return string
	 */
	public function getLocale(): string;

    /**
     * getMessages
     * @return array<string|null>
     */
	public function getMessages(): array;

	/**
	 * getMessage
	 * @param string $messageId
	 * @return string
	 */
	public function getMessage(string $messageId): string;

    /**
     * @function load
     * @param string $domain
     * @param string $locale
     * @return void
     */
    public function load(string $domain, string $locale): void;

    /**
     * @function isLoaded
     * @param string $locale
     * @return bool
     */
    public function isLoaded(string $domain = '', string $locale = ''): bool;
}
