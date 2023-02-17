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
	 * use named parameters and make sure the first element in your message placeholders is a string
	 * (which matches the key name of a parameter).
	 * @return array<string, mixed>
	 */
	public function getParameters(): array;

    /**
     * @function format
     * @param DomainCatalogInterface $catalog
     * @return string
     *
     * format and output the message
     */
    public function format(DomainCatalogInterface $catalog): false|string;
}
