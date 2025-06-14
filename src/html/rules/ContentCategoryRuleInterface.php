<?php

namespace pvc\interfaces\html\rules;

use pvc\interfaces\html\content_model\ContentCategory;

interface ContentCategoryRuleInterface
{
    /**
     * @return array<ContentCategory>
     */
    public function test(): array;
}