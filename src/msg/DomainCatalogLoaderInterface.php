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
     * @return false|array<string, string>
     *
     * returns false if it is unable to find a catalog corresponding to domain and locale, otherwise returns and
     * array of msgIds => translated strings.
     */
	public function loadCatalog(string $domain, string $locale): bool|array;

}
