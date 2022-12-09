<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version 1.0
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection\range_collection_factory;

use pvc\interfaces\struct\range_collection\RangeCollectionInterface;

/**
 * Interface RangeCollectionFactoryInterface
 * @template RangeElement
 */
interface RangeCollectionFactoryInterface
{
	/**
	 * createRangeCollection
	 * @return RangeCollectionInterface<RangeElement>
	 */
	public function createRangeCollection(): RangeCollectionInterface;
}
