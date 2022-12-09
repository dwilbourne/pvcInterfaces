<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\config;

/**
 *
 */

use pvc\interfaces\msg\DomainCatalogLoaderInterface;

/**
 * Interface MsgConfigInterface
 */
interface MsgConfigInterface
{
	/**
	 * getDomainCatalogLoader
	 * @param string $domain
	 * @return DomainCatalogLoaderInterface
	 */
	public static function getDomainCatalogLoader(string $domain): DomainCatalogLoaderInterface;
}
