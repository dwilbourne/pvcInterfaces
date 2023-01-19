<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\frmtr\range_collection;

use pvc\frmtr\FrmtrInterface;
use pvc\struct\range_collection\RangeCollectionInterface;

/**
 * Interface FrmtrRangeCollectionInterface
 * @template RangeElement
 */
interface FrmtrRangeCollectionInterface extends FrmtrInterface
{
	/**
	 * format
	 * @param RangeCollectionInterface<RangeElement> $rangeCollection
	 * @return string
	 */
	public function format(RangeCollectionInterface $rangeCollection): string;
}
