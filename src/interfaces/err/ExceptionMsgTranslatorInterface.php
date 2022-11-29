<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

interface ExceptionMsgTranslatorInterface
{
	/**
	 * trans
	 * @param ExceptionMsgInterface $msg
	 * @return string
	 */
	public function trans(ExceptionMsgInterface $msg): string;
}
