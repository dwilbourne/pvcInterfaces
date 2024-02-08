<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\config;

/**
 * Interface MsgConfigInterface
 */
interface MsgConfigInterface
{
    /**
     * getDomainCatalogConfig
     * @param string $domain
     * @return array<string, string>
     */
    public static function getDomainCatalogConfig(string $domain): array;

    /**
     * domainExists
     * @param string $domain
     * @return bool
     */
    public static function domainExists(string $domain): bool;
}
