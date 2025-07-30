<?php

namespace pvc\interfaces\html\rules;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\html\dom\node_types\DomElementInterface;
use pvc\interfaces\html\dom\NodeInterface;

interface AbstractRuleInterface
{
    /**
     * @return ContentModelInterface
     */
    public function getContentModel(): ContentModelInterface;

    /**
     * @return DomElementInterface
     */
    public function getDomElement(): DomElementInterface;

    /**
     * @return NodeInterface
     */
    public function getDomNode(): NodeInterface;
}
