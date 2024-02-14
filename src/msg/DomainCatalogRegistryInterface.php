<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * Interface DomainCatalogRegistryInterface
 */
interface DomainCatalogRegistryInterface
{
    /**
     * getDomainCatalogConfig
     * @param string $domain
     * @return array<string, string[]>
     */
    public static function getDomainCatalogConfig(string $domain): array;

    /**
     * addDomainCatalogConfig
     * @param string $domain
     * @param array<string, string> $parameters
     * @param bool $overwrite
     * @return bool
     */
    public static function addDomainCatalogConfig(string $domain, array $parameters, bool $overwrite = false): bool;

    /**
     * domainExists
     * @param string $domain
     * @return bool
     */
    public static function domainExists(string $domain): bool;
}
