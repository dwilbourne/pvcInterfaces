<?php

namespace pvc\interfaces\html\content_rule;

use pvc\interfaces\html\content_model\ContentModelInterface;

interface ContentRuleInterface
{
    /**
     * @param  ContentModelInterface $parent
     * @param  ContentModelInterface $child
     * @return bool
     *
     * return false if child fails the rule test (e.g. cannot be accepted
     * into the DOM tree)
     */
    public function ruleTest(ContentModelInterface $parent, ContentModelInterface $child): bool;
}