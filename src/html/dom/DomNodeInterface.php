<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\content_model\ContentCategory;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;

/**
 * @extends TreenodeOrderedInterface<DomElementInterface>
 */
interface DomNodeInterface extends TreenodeOrderedInterface
{
    public function getDomElement() : DomElementInterface;

    public function getName(): ?string;

    public function hasName(string $name): bool;

    public function getAttribute(string $name): ?AttributeInterface;

    public function hasAttribute(string $name): bool;

    public function hasCategory(ContentCategory $category): bool;

    /**
     * @return array<ContentCategory>
     */
    public function getCategories(): array;

    public function hasParentWith(callable $callback): bool;

    public function hasAncestorWith(callable $callback): bool;

    public function canAcceptContent(DomNodeInterface $domNode): bool;
}