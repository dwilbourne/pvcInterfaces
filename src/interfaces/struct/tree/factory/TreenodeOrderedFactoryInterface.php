<?php declare(strict_types = 1);
/**
 * @package: pvc
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version: 1.0
 */

namespace pvc\interfaces\struct\tree\factory;

use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;

/**
 * Interface TreenodeUnorderedFactoryInterface
 */
interface TreenodeOrderedFactoryInterface
{
    /**
     * @function makeTreenode
     * @param int $nodeid
     * @return \pvc\interfaces\struct\tree\node\TreenodeOrderedInterface
     */
    public function makeTreenode(int $nodeid) : TreenodeOrderedInterface;
}
