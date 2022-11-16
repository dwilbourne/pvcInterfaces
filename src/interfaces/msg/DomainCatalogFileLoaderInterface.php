<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\msg;

interface DomainCatalogFileLoaderInterface
{
    /**
     * loadCatalogFile
     * @param string $filename
     */
    public function loadCatalogFile(string $filename) : void;

    /**
     * getDomain
     * @return string
     */
    public function getDomain() : string;

    /**
     * getLocale
     * @return string
     */
    public function getLocale(): string;

    /**
     * getMessages
     * @return array<MsgInterface>
     */
    public function getMessages(): array;
}