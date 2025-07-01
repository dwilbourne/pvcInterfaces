<?php

namespace pvc\interfaces\html\rules;

use pvc\interfaces\html\content_model\ContentModelInterface;

interface ContentRuleInterface
{
    public const int IS_PERMITTED = 1;
    public const int IS_NOT_APPLICABLE = 0;
    public const int IS_NOT_PERMITTED = -1;


    /**
     * @param  ContentModelInterface $content
     * @return bool
     *
     * returns one of the constants defined above.
     * @return int<-1, 1>
     */
    public function test(ContentModelInterface $content): int;
}