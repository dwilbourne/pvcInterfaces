<?php
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version 1.0
 */

namespace pvc\interfaces\struct\range_collection\range_collection_factory;

use pvc\interfaces\struct\range_collection\RangeCollectionInterface;

interface RangeCollectionFactoryInterface
{
    public function createRangeCollection() : RangeCollectionInterface;
}
