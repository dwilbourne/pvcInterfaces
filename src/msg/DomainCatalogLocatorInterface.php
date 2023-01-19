<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\msg;

/**
 * Interface DomainCatalogLocatorInterface
 */
interface DomainCatalogLocatorInterface
{
	/**
	 * getDomainCatalogLoader
	 * @param string $messageDomain
	 * @return DomainCatalogLoaderInterface
	 */
	public function getDomainCatalogLoader(string $messageDomain): DomainCatalogLoaderInterface;
}
