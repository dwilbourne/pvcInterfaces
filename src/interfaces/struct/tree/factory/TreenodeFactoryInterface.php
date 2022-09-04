<?php declare(strict_types = 1);
/**
 * @package: pvc
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version: 1.0
 */

namespace pvc\interfaces\struct\tree\factory;

use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * Interface TreenodeFactoryInterface
 */
interface TreenodeFactoryInterface
{
    /**
     * @function makeTreenode
     * @param int $nodeid
     * @return \pvc\interfaces\struct\tree\node\TreenodeInterface
     */
    public function makeTreenode(int $nodeid) : TreenodeInterface;
}
