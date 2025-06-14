<?php

namespace pvc\interfaces\html\rules;

use pvc\interfaces\html\content_model\ContentCategory;
use pvc\interfaces\html\content_model\ContentModelInterface;

interface ContentCategoryRuleInterface
{
    /**
     * @param ContentModelInterface $contentModel
     * @return array<ContentCategory>
     */
    public function test(ContentModelInterface $contentModel): array;
}