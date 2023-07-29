<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\lists\ListUnorderedInterface;

/**
 * Interface TreenodeInterface defines the operations for "unordered" tree nodes, e.g. the children of a node are not
 * kept in any specific order.
 *
 * @template NodeValueType
 * @extends TreenodeAbstractInterface<TreenodeInterface, NodeValueType>
 */
interface TreenodeInterface extends TreenodeAbstractInterface
{
    /**
     * setChildren allows one to set all the children of a node at once as an unordered list of nodes
     * @param ListUnorderedInterface<TreenodeInterface<NodeValueType>> $list
     */
    public function setChildren(ListUnorderedInterface $list): void;

    /**
     * @function getChildren gets the children of a node as an unordered list
     * @return ListUnorderedInterface<TreenodeInterface<NodeValueType>>
     */
    public function getChildren(): ListUnorderedInterface;

    /**
     * @function getSiblings returns an unordered list consisting of a node and all its siblings (e.g. *all* the
     * children of the parent of a node).
     *
     * @return ListUnorderedInterface<TreenodeInterface<NodeValueType>>|null
     */
    public function getSiblings(): ?ListUnorderedInterface;
}
