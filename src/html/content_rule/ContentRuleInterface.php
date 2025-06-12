<?php

namespace pvc\interfaces\html\content_rule;

use pvc\interfaces\html\element\ElementInterface;

interface ContentRuleInterface
{
    /**
     * @param  ElementInterface $childElement
     * @return bool
     * return false if child element fails the rule test (e.g. cannot be accepted
     * into the DOM tree)
     */
    public function ruleTest(ElementInterface $childElement): bool;
}