<?php

namespace pvc\interfaces\html\rules;

use pvc\interfaces\html\content_model\ContentModelInterface;

interface ContentRuleInterface
{
    /**
     * @param  ContentModelInterface $content
     * returns one of the constants defined in ContentModelInterface
     * @return int
     */
    public function test(ContentModelInterface $content): int;
}