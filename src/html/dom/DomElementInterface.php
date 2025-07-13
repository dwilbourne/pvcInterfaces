<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\content_model\ContentCategory;
use pvc\interfaces\html\content_model\ContentModelInterface;

interface DomElementInterface
{
    /**
     * @return ?DomNodeInterface
     */
    public function getDomNode(): ?DomNodeInterface;

    /**
     * @return ContentModelInterface|null
     */
    public function getContentModel(): ?ContentModelInterface;

    public function getName() : string;

    public function getAttribute(string $name): ?AttributeInterface;

    public function hasName(string $name) : bool;

    public function hasAttribute(string $name) : bool;

    public function hasCategory(ContentCategory $category) : bool;

    public function renderFirstVisit(): string;

    public function renderLastVisit(): string;
}