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
     * @return false|array<string, string>
     *
     * returns false if the file implied by $domain and $baseFileName does not exist or is not readable.  Throws an
     * exception if the file returns something other than array<string, string>.
     */
    public function parseDomainCatalogFile(string $directory, string $baseFileName): false|array;
}