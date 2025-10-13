<?php

namespace pvc\interfaces\html\content_rules;

use pvc\interfaces\html\content_model\ContentPermission;
use pvc\interfaces\html\dom\DomNodeInterface;

interface PermissionRuleInterface extends AbstractRuleInterface
{
    /**
     * @param  DomNodeInterface  $content
     * @return ContentPermission
     */
    public function test(DomNodeInterface $content): ContentPermission;
}