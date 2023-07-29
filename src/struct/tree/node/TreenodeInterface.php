<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\lists\ListUnorderedInterface;

/**
 * Interface TreenodeInterface.
 * @template NodeValueType
 * @extends TreenodeAbstractInterface<TreenodeInterface, NodeValueType>
 */
interface TreenodeInterface extends TreenodeAbstractInterface
{
    /**
     * setChildren
     * @param ListUnorderedInterface<TreenodeInterface<NodeValueType>> $list
     */
    public function setChildren(ListUnorderedInterface $list): void;

    /**
     * @function getChildren
     * @return ListUnorderedInterface<TreenodeInterface<NodeValueType>>
     */
    public function getChildren(): ListUnorderedInterface;

    /**
     * @function getSiblings
     * @return ListUnorderedInterface<TreenodeInterface<NodeValueType>>|null
     */
    public function getSiblings(): ?ListUnorderedInterface;
}
