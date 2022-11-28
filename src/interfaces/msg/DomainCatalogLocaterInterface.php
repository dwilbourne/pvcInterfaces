<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\msg;

/**
 * Interface DomainCatalogLocaterInterface
 * @package pvc\interfaces\msg
 */
interface DomainCatalogLocaterInterface
{
	public function getDomainCatalogLoader(string $messageDomain): DomainCatalogLoaderInterface;
}