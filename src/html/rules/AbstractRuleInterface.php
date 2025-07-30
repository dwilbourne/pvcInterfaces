<?php

namespace pvc\interfaces\html\rules;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\html\dom\DomNodeInterface;
use pvc\interfaces\html\dom\node_types\DomElementInterfaceDom;

interface AbstractRuleInterface
{
    /**
     * @return ContentModelInterface
     */
    public function getContentModel(): ContentModelInterface;

    /**
     * @return DomElementInterfaceDom
     */
    public function getDomElement(): DomElementInterfaceDom;

    /**
     * @return DomNodeInterface
     */
    public function getDomNode(): DomNodeInterface;
}
