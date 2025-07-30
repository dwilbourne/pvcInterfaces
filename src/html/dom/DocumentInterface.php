<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\dom\node_types\DomCommentInterfaceDom;
use pvc\interfaces\html\dom\node_types\DomElementInterfaceDom;
use pvc\interfaces\html\dom\node_types\DomTextInterfaceDom;

interface DocumentInterface
{
    /**
     * creation methods
     */
    public function createElement(string $name): DomElementInterfaceDom;

    public function createComment(string $comment): DomCommentInterfaceDom;

    public function createTextNode(string $text): DomTextInterfaceDom;

    /**
     * tree oriented methods
     */
    public function setNode(DomNodeInterface $node, DomNodeInterface $parent): void;

    public function deleteNode(DomNodeInterface $node): void;

    public function render(): string;

    /**
     * element selectors
     */
    public function getElementById(string $id): ?DomNodeInterface;

    /**
     * @param  string  $name
     *
     * @return array<DomNodeInterface>
     */
    public function getElementsByName(string $name): array;

    /**
     * @param  string  $className
     *
     * @return array<DomNodeInterface>
     */
    public function getElementsByClass(string $className): array;

    /**
     * @param  string  $tagName
     *
     * @return array<DomNodeInterface>
     */
    public function getElementsByTagName(string $tagName): array;

    public function getElementByQuerySelector(string $selector): ?DomNodeInterface;

    /**
     * @param  string  $tagName
     *
     * @return array<DomNodeInterface>
     */
    public function getElementsByQuerySelectorAll(string $tagName): array;
}