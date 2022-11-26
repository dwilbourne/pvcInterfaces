<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

use pvc\interfaces\msg\DomainCatalogInterface;

/**
 * Interface ExceptionConstantsInterface
 * @package pvc\interfaces\err
 */
interface ExceptionCatalogInterface extends DomainCatalogInterface
{
	/**
	 * getMsgCode
	 * @param string $msgId
	 * @return int|null
	 */
	public function getMsgCode(string $msgId): ?int;

}
