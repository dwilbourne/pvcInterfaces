<?php

namespace pvc\interfaces\html\rules;

use pvc\interfaces\html\content_model\ContentCategory;
use pvc\interfaces\html\dom\node_types\DomNodeInterface;

interface CategoryRuleInterface  extends AbstractRuleInterface
{
    /**
     * @param DomNodeInterface  $content
     *
     * @return array<ContentCategory>
     *
     * test method returns a non-empty array of content categories if,
     * by virtue of its context, this node belongs to those
     * categories.  The array is empty if the context does not support the
     * addition of any content categories
     */
    public function test(DomNodeInterface $content): array;
}