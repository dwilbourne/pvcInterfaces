<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * Interface MsgTranslatorInterface
 */
interface MsgTranslatorInterface
{
	/**
	 * trans
	 * @param MsgInterface $msg
	 * @return string
	 */
	public function trans(MsgInterface $msg): string;
}
