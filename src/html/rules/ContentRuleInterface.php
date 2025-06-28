<?php

namespace pvc\interfaces\html\rules;

use pvc\interfaces\html\content_model\ContentModelInterface;

interface ContentRuleInterface
{
    /**
     * @param  ContentModelInterface $content
     * @return bool
     *
     * return false if content fails the rule test (e.g. cannot be accepted
     * into the DOM tree in this position)
     */
    public function test(ContentModelInterface $content): bool;
}