<?php

/**
 * @package pvcInterfaces
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
     *
     * throws an exception if it is unable to find a catalog corresponding to domain and locale, or is unable
     * to parse such a catalog if it exists.  Otherwise, it returns an array of msgIds => translated strings.
     */
	public function loadCatalog(string $domain, string $locale): array;

}
