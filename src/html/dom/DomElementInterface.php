<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\content_model\ContentCategory;
use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface DomElementInterface
{
    public function getName() : string;

    /**
     * @param  string  $name
     *
     * @return AttributeInterface|null
     */
    public function getAttribute(string $name): ?AttributeInterface;

    /**
     * @param  ContentCategory  $category
     *
     * @return ContentCategory|null
     */
    public function getCategory(ContentCategory $category) : ?ContentCategory;

    /**
     * @return TreenodeInterface<DomElementInterface>
     */
    public function getContainingTreenode() : TreenodeInterface;

    public function canAcceptContent(DomElementInterface $domNode): bool;

    public function getContentModel(): ContentModelInterface;

    public function renderFirstVisit(): string;

    public function renderLastVisit(): string;
}