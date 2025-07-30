<?php

namespace pvc\interfaces\html\dom;

interface NodeInterface
{
    public function getNodeType(): NodeType;
    public function getName(): string;

    public function getParent(): ?NodeInterface;

    public function getChildren() : NodeCollectionInterface;

    /**
     * @return NodeInterface
     */
    public function getFirstChild();

    /**
     * @return NodeInterface
     */
    public function getLastChild();

    /**
     * @return NodeInterface
     */
    public function getNthChild(int $n);

    /**
     * @return NodeCollectionInterface
     */
    public function getSiblings();

    public function render(): string;
}