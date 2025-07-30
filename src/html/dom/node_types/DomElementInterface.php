<?php

namespace pvc\interfaces\html\dom\node_types;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\html\dom\NodeCollectionInterface;
use pvc\interfaces\html\dom\NodeInterface;
use pvc\interfaces\html\element\ElementInterface;

interface DomElementInterface extends NodeInterface, ElementInterface, ContentModelInterface
{
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
}