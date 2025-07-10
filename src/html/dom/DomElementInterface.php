<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\content_model\ContentCategory;
use pvc\interfaces\html\content_model\ContentModelInterface;

interface DomElementInterface
{
    /**
     * @return DomNodeInterface
     */
    public function getDomNode(): DomNodeInterface;

    public function getContentModel(): ContentModelInterface;

    public static function getName() : string;

    public static function getAttribute(string $name): ?AttributeInterface;

    public static function hasName(string $name) : bool;

    public static function hasAttribute(string $name) : bool;

    public static function hasCategory(ContentCategory $category) : bool;

    public function renderFirstVisit(): string;

    public function renderLastVisit(): string;
}