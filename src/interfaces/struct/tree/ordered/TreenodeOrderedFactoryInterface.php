<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\ordered;

/**
 * Interface TreenodeUnorderedFactoryInterface
 * @template NodeType of TreenodeOrderedInterface
 */
interface TreenodeOrderedFactoryInterface
{
	/**
	 * @function makeTreenode
	 * @param int $nodeid
	 * @return TreenodeOrderedInterface<NodeType>
	 */
	public function makeTreenode(int $nodeid): TreenodeOrderedInterface;
}
