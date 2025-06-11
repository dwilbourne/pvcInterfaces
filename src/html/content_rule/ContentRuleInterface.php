<?php

namespace pvc\interfaces\html\content_rule;

use pvc\interfaces\html\dom\DomNodeInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface ContentRuleInterface
{
    /**
     * @param  TreenodeInterface<DomNodeInterface> $node
     * @return bool
     * return false if node fails the rule test (e.g. cannot be accepted into the tree)
     */
    public function ruleTest(TreenodeInterface $node): bool;
}