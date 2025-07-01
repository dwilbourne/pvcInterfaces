<?php

namespace pvc\interfaces\html\rules;

use pvc\interfaces\html\content_model\ContentModelInterface;

interface ContentRuleInterface
{
    /**
     * @param  ContentModelInterface $content
     * @return bool
     *
     * returns one of the constants defined in ContentModelInterface
     * @return int<-1, 1>
     */
    public function test(ContentModelInterface $content): int;
}