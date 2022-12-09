<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\lists\unordered;

/**
 * Class ListFactoryInterface
 * @template ListType of ListUnorderedInterface
 */
interface ListUnorderedFactoryInterface
{
	/**
	 * makeList
	 * @return ListUnorderedInterface<ListType>
	 */
	public function makeList(): ListUnorderedInterface;
}
