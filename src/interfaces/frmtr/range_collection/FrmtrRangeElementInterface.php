<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\frmtr\range_collection;

use pvc\interfaces\frmtr\FrmtrInterface;
use pvc\interfaces\struct\range_collection\range_element\RangeElementInterface;

interface FrmtrRangeElementInterface extends FrmtrInterface
{
    public function format(RangeElementInterface $rangeElement) : string;
}