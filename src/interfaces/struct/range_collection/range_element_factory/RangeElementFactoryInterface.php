<?php
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version 1.0
 */

namespace pvc\interfaces\struct\range_collection\range_element_factory;

use pvc\interfaces\struct\range_collection\range_element\RangeElementInterface;

interface RangeElementFactoryInterface
{
    public function createRangeElement($min, $max) : RangeElementInterface;
}
