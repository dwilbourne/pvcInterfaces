<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\range_collection;

use pvc\interfaces\frmtr\FrmtrInterface;
use pvc\interfaces\struct\range_collection\range_element\RangeElementInterface;

/**
 * Interface FrmtrRangeElementInterface
 */
interface FrmtrRangeElementInterface extends FrmtrInterface
{
	/**
	 * format
	 * @param RangeElementInterface $rangeElement
	 * @return string
	 */
	public function format(RangeElementInterface $rangeElement): string;
}
