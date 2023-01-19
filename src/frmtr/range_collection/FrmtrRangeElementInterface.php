<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\frmtr\range_collection;

use pvc\frmtr\FrmtrInterface;


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
