<?php

namespace pvc\interfaces\html\content_rules;

use pvc\interfaces\html\dom\node_types\DomNodeInterface;

interface AbstractRuleInterface
{
    public function getContainingDomNode(): DomNodeInterface;
}