<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\msg;

interface MsgInterface
{
	/**
	 * getMsgId
	 * @return string
	 */
	public function getMsgId(): string;

	/**
	 * getDomain
	 * @return string
	 */
	public function getDomain(): string;

	/**
	 * getParameters
	 * @return mixed[]
	 */
	public function getParameters(): array;

	/**
	 * getLocale
	 * @return string|null
	 */
	public function getLocale(): ?string;
}
