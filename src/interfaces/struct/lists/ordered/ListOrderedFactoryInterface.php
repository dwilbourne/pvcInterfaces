<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\lists\ordered;

/**
 * Class ListFactoryInterface
 * @template ListType of ListOrderedInterface
 */
interface ListOrderedFactoryInterface
{
	/**
	 * makeList
	 * @return ListOrderedInterface<ListType>
	 */
	public function makeList(): ListOrderedInterface;
}
