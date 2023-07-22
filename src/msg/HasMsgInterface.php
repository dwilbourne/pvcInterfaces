<?php

/**
 * @package pvcInterfaces
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * Interface HasMsgInterface
 */
interface HasMsgInterface
{
	/**
	 * getMsg
	 * @return MsgInterface|null
	 */
	public function getMsg(): ?MsgInterface;
}