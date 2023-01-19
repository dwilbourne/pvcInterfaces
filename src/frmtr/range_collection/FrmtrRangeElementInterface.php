<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\range_collection;

use pvc\interfaces\frmtr\FrmtrInterface;


/**
 * Interface FrmtrRangeElementInterface
 * @template RangeElement
 */
interface FrmtrRangeElementInterface extends FrmtrInterface
{
	/**
	 * format
	 * @param RangeElement $rangeElement
	 * @return string
	 */
	public function format($rangeElement): string;
}
