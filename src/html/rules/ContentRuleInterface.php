<?php

namespace pvc\interfaces\html\rules;

use pvc\interfaces\html\content_model\ContentPermission;
use pvc\interfaces\html\dom\DomNodeInterface;

interface ContentRuleInterface extends AbstractRuleInterface
{
    /**
     * @param  DomNodeInterface $content
     * returns one of the constants defined in ContentModelInterface
     * @return ContentPermission
     */
    public function test(DomNodeInterface $content): ContentPermission;
}