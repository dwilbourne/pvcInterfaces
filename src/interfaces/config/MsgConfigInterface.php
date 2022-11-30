<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\config;

use pvc\interfaces\msg\DomainCatalogLoaderInterface;

interface MsgConfigInterface
{
    public static function getDomainCatalogLoader(string $domain): DomainCatalogLoaderInterface;
}
