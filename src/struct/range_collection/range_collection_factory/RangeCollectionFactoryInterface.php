<?php
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version 1.0
 */

namespace pvc\struct\range_collection\range_collection_factory;

use pvc\struct\range_collection\RangeCollectionInterface;

interface RangeCollectionFactoryInterface
{
    public function createRangeCollection() : RangeCollectionInterface;
}
