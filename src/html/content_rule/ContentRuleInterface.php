<?php

namespace pvc\interfaces\html\content_rule;

use pvc\interfaces\html\content_model\ContentModelInterface;

interface ContentRuleInterface
{
    /**
     * @param  ContentModelInterface $content
     * @return bool
     *
     * return false if child fails the rule test (e.g. cannot be accepted
     * into the DOM tree)
     */
    public function test(ContentModelInterface $content): bool;
}