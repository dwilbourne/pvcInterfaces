<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * A DomainCatalogLoader is an object responsible for retrieving messageid / message template pairs from a data store
 * and putting them into a domain catalog.
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
     * to parse such a catalog if it timeZoneNameExists.  Otherwise, it returns an array of msgIds => translated strings.
     */
    public function loadCatalog(string $domain, string $locale): array;
}
