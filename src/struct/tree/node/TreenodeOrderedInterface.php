<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\lists\ListOrderedInterface;

/**
 * Interface TreenodeOrderedInterface
 * @template NodeValueType
 * @extends TreenodeAbstractInterface<TreenodeOrderedInterface, NodeValueType>
 */
interface TreenodeOrderedInterface extends TreenodeAbstractInterface
{
    /**
     * setChildren
     * @param ListOrderedInterface<TreenodeOrderedInterface<NodeValueType>> $list
     */
    public function setChildren(ListOrderedInterface $list): void;

    /**
     * @function getChildren
     * @return ListOrderedInterface<TreenodeOrderedInterface<NodeValueType>>
     */
    public function getChildren(): ListOrderedInterface;

    /**
     * @function getSiblings
     * @return ListOrderedInterface<TreenodeOrderedInterface<NodeValueType>>|null
     */
    public function getSiblings(): ?ListOrderedInterface;

    /**
     * @function setIndex sets the ordinal position of this node in the ordered list of siblings
     * @param int $index
     */
    public function setIndex(int $index): void;

    /**
     * @function getIndex gets the ordinal position of this node in the ordered list of siblings
     * @return int
     */
    public function getIndex(): ?int;
}
