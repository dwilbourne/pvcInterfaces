<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\unordered;

/**
 * Interface TreenodeFactoryInterface
 * @template NodeType of TreenodeInterface
 */
interface TreenodeFactoryInterface
{
	/**
	 * @function makeTreenode
	 * @param int $nodeId
	 * @return TreenodeInterface<NodeType>
	 */
	public function makeTreenode(int $nodeId): TreenodeInterface;
}
