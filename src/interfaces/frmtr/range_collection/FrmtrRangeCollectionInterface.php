<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\range_collection;

use pvc\interfaces\frmtr\FrmtrInterface;
use pvc\interfaces\struct\range_collection\RangeCollectionInterface;

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
