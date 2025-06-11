<?php

namespace pvc\interfaces\html\content_rule;

use pvc\interfaces\html\dom\DomNodeInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface ContentRuleInterface
{
    /**
     * @param  TreenodeInterface<DomNodeInterface> $node
     * @return bool
     */
    public function ruleTest(TreenodeInterface $node): bool;
}