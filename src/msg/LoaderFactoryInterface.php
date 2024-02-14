<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * Class LoaderFactoryInterface
 */
interface LoaderFactoryInterface
{
    /**
     * makeLoader
     * @param string $loaderType
     * @param array $parameters <string, string[]>
     * @return DomainCatalogLoaderInterface
     */
    public function makeLoader(string $loaderType, array $parameters): DomainCatalogLoaderInterface;
}
