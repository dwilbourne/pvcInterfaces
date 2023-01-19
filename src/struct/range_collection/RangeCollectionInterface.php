<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version 1.0
 */

declare(strict_types=1);

namespace pvc\struct\range_collection;

/**
 * Interface RangeCollectionInterface
 * @template RangeElement
 */
interface RangeCollectionInterface
{
	/**
	 * getRangeElements
	 * @return RangeElement[]
	 */
	public function getRanges(): array;
}
