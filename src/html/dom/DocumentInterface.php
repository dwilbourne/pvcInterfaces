<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\dom\node_types\DomCommentInterface;
use pvc\interfaces\html\dom\node_types\DomElementInterface;
use pvc\interfaces\html\dom\node_types\DomTextInterface;

interface DocumentInterface
{
    /**
     * creation methods
     */
    public function createElement(string $name): DomElementInterface;

    public function createComment(string $comment): DomCommentInterface;

    public function createTextNode(string $text): DomTextInterface;

    /**
     * tree oriented methods
     */
    public function setNode(NodeInterface $node, NodeInterface $parent): void;

    public function deleteNode(NodeInterface $node): void;

    public function render(): string;

    /**
     * element selectors
     */
    public function getElementById(string $id): ?NodeInterface;

    /**
     * @param  string  $name
     *
     * @return array<NodeInterface>
     */
    public function getElementsByName(string $name): array;

    /**
     * @param  string  $className
     *
     * @return array<NodeInterface>
     */
    public function getElementsByClass(string $className): array;

    /**
     * @param  string  $tagName
     *
     * @return array<NodeInterface>
     */
    public function getElementsByTagName(string $tagName): array;

    public function getElementByQuerySelector(string $selector): ?NodeInterface;

    /**
     * @param  string  $tagName
     *
     * @return array<NodeInterface>
     */
    public function getElementsByQuerySelectorAll(string $tagName): array;
}