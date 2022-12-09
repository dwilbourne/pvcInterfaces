<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version 1.0
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection\range_element_factory;

use pvc\interfaces\struct\range_collection\range_element\RangeElementInterface;

/**
 * Interface RangeElementFactoryInterface
 */
interface RangeElementFactoryInterface
{
	/**
	 * createRangeElement
	 * @param float $min
	 * @param float $max
	 * @return RangeElementInterface
	 */
	public function createRangeElement(float $min, float $max): RangeElementInterface;
}
