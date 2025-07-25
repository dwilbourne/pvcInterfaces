<?php

namespace pvc\interfaces\html\rules;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\html\dom\DomElementInterface;
use pvc\interfaces\html\dom\DomNodeInterface;

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
     * @return DomNodeInterface
     */
    public function getDomNode(): DomNodeInterface;
}
