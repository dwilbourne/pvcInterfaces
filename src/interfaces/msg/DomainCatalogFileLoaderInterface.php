<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\msg;

interface DomainCatalogFileLoaderInterface
{
    public function loadCatalogFile(string $filename) : void;

    public function getDomain() : string;

    public function getLocale(): string;

    public function getMessages(): array;
}