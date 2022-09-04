<?php declare(strict_types = 1);
/**
 * @package: pvc
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version: 1.0
 */

namespace pvc\interfaces\struct\lists\factory;

use pvc\interfaces\struct\lists\ListOrderedInterface;

/**
 * Class ListFactoryInterface
 */
interface ListOrderedFactoryInterface
{
    public function makeList() : ListOrderedInterface;
}
