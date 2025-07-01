<?php

namespace pvc\interfaces\html\rules;

/**
 * @template Characteristic
 */
interface ContentRuleInterface
{
    /**
     * @param  Characteristic ...$content
     * @return bool
     *
     * returns one of the constants defined in ContentModelInterface
     * @return int
     */
    public function test(...$content): int;
}