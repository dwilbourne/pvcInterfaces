<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

/**
 * Class NodeInterface
 * @template SearchableNodeType
 * searchable node types are either searchable or visitable
 */
interface NodeInterface
{
    /**
     * getNodeId
     * @return non-negative-int
     */
    public function getNodeId(): int;

    /**
     * getChildren
     * @return array<SearchableNodeType>
     */
    public function getChildrenAsArray(): array;
}
