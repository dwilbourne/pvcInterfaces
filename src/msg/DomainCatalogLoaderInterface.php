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
     * @return array<string, string>
     */
	public function loadCatalog(string $domain, string $locale): array;

}
