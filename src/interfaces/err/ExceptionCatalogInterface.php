<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

/**
 * Interface ExceptionConstantsInterface
 * @package pvc\interfaces\err
 */
interface ExceptionCatalogInterface
{
	/**
	 * getMsgCode
	 * @param string $msgId
	 * @return int
	 */
	public function getMsgCode(string $msgId): int;

	/**
	 * getMessages
	 * @return array<string, string>
	 */
	public function getMessages(): array;

	/**
	 * getMessage
	 * @param string $msgId
	 * @return string
	 */
	public function getMessage(string $msgId): string;
}
