<?php

namespace pvc\interfaces\html\rules;

use pvc\interfaces\html\dom\DomNodeInterface;

interface ContentRuleInterface
{
    /**
     * @param  DomNodeInterface $content
     * returns one of the constants defined in ContentModelInterface
     * @return int
     */
    public function test(DomNodeInterface $content): int;
}