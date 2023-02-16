<?php

/**
 * @package pvcInterfaces
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare (strict_types=1);

namespace pvc\interfaces\msg;

interface DomainCatalogFileParserInterface
{
    /**
     * @function parseDomainCatalogFile
     * @param string $directory
     * @param string $baseFileName
     * @return array<string, string>
     */
    public function parseDomainCatalogFile(string $directory, string $baseFileName): array;
}