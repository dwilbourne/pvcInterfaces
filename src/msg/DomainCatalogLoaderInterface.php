<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\msg;

/**
 * Interface DomainCatalogLoaderInterface
 */
interface DomainCatalogLoaderInterface
{
	/**
	 * loadCatalog
	 */
	public function loadCatalog(): void;

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
	 * @return array<string>
	 */
	public function getMessages(): array;
}
