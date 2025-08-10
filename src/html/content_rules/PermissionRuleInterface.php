<?php

namespace pvc\interfaces\html\content_rules;

use pvc\interfaces\html\content_model\ContentPermission;
use pvc\interfaces\html\dom\node_types\DomNodeInterface;

interface PermissionRuleInterface extends AbstractRuleInterface
{
    /**
     * @param  DomNodeInterface  $content
     * returns one of the constants defined in ContentModelInterface
     *
     * @return ContentPermission
     */
    public function test(DomNodeInterface $content): ContentPermission;
}