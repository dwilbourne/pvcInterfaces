<?php

namespace pvc\interfaces\html\content_rules;

use pvc\interfaces\html\dom\DomNodeInterface;

interface AbstractRuleInterface
{
    public function getContainingDomNode(): DomNodeInterface;
}