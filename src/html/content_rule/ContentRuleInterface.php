<?php

namespace pvc\interfaces\html\content_rule;

use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface ContentRuleInterface
{
    public function ruleTest(TreenodeInterface $node): bool;
}