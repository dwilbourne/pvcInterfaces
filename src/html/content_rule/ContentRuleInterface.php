<?php

namespace pvc\interfaces\html\content_rule;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\html\dom\DomNodeInterface;

interface ContentRuleInterface
{
    /**
     * @param  ContentModelInterface $parent
     * @param  DomNodeInterface $childElement
     * @return bool
     * return false if child element fails the rule test (e.g. cannot be accepted
     * into the DOM tree)
     */
    public function ruleTest(ContentModelInterface $parent, DomNodeInterface $childElement): bool;
}