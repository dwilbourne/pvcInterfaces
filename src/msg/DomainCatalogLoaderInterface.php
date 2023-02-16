<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * Interface DomainCatalogLoaderInterface
 */
interface DomainCatalogLoaderInterface
{
    /**
     * @function loadCatalog
     * @param string $domain
     * @param string $locale
     */
	public function loadCatalog(string $domain, string $locale): void;

	/**
	 * @function getDomain
	 * @return string
	 */
	public function getDomain(): string;

	/**
	 * @function getLocale
	 * @return string
	 */
	public function getLocale(): string;

	/**
	 * @function getMessages
	 * @return array<string>
	 */
	public function getMessages(): array;
}
