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
     * setProjectRoot
     * @param string $root
     */
    public function setProjectRoot(string $root): void;

    /**
     * getProjectRoot
     * @return string
     */
    public function getProjectRoot(): string;

    /**
     * makeLoader
     * @param string $loaderType
     * @param array<string, array<string, string>> $parameters
     * @return DomainCatalogLoaderInterface
     */
    public function makeLoader(string $loaderType, array $parameters): DomainCatalogLoaderInterface;
}
