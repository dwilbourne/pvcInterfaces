<?php

namespace pvc\interfaces\html\content_rule;

use pvc\interfaces\html\dom\DomNodeInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface DescendantRuleInterface
{
    /**
     * @param  TreenodeInterface<DomNodeInterface> $node
     * @param  TreenodeInterface<DomNodeInterface> $descendant
     * @return bool
     * return false if descendant node fails the rule test (e.g. cannot be accepted
     * into the DOM tree)
     */
    public function ruleTest(TreenodeInterface $node, TreenodeInterface $descendant): bool;
}