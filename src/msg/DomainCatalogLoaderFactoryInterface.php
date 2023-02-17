<?php

/**
 * @package pvcInterfaces
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare (strict_types=1);

namespace pvc\interfaces\msg;

interface DomainCatalogLoaderFactoryInterface
{
    public function create(string $domain): DomainCatalogLoaderInterface;
}