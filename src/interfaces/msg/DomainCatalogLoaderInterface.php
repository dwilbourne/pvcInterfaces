<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\msg;

interface DomainCatalogLoaderInterface
{
    /**
     * loadCatalog
     */
    public function loadCatalog(): void;

    /**
     * getDomain
     * @return string
     */
    public function getDomain(): string;

    /**
     * getLocale
     * @return string
     */
    public function getLocale(): string;

    /**
     * getMessages
     * @return array<string>
     */
    public function getMessages(): array;
}
