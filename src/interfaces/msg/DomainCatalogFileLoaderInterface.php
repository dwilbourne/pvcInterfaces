<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\msg;

interface DomainCatalogFileLoaderInterface
{
    public function loadCatalogFile(DomainCatalogInterface $domainCatalog, string $filename) : void;
}