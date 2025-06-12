<?php

namespace pvc\interfaces\html\content_rule;

use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface DescendantRuleInterface
{
    /**
     * @param  TreenodeInterface $childNode
     * @return bool
     * return false if child node fails the rule test (e.g. cannot be accepted
     * into the DOM tree)
     */
    public function ruleTest(TreenodeInterface $childNode): bool;
}