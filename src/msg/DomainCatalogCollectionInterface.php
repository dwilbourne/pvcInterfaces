<?php

/**
 * @package pvcInterfaces
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare (strict_types=1);

namespace pvc\interfaces\msg;

interface DomainCatalogCollectionInterface
{
    /**
     * @function addCatalog
     * @param string $domain
     * @param DomainCatalogInterface $catalog
     */
    public function addCatalog(string $domain, DomainCatalogInterface $catalog): void;

    /**
     * @function getCatalogs
     * @return array<string, DomainCatalogInterface>
     */
    public function getCatalogs(): array;

    /**
     * @function getCatalog
     * @param string $domain
     * @return DomainCatalogInterface|null
     */
    public function getCatalog(string $domain): ?DomainCatalogInterface;
}