<?php

/**
 * @package pvcInterfaces
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * Interface MsgInterface
 */
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
     * each parameter is a key-value pair where the key is the name of the parameter and the value is the value to be
     * substituted into the message.
     * @return array<string, mixed>
     */
	public function getParameters(): array;
}
