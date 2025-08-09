<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\dom\node_types\DomNodeInterface;

interface DocumentInterface
{
    /**
     * creation methods
     */
    public function createElement(string $name): DomNodeInterface;

    public function createComment(): DomNodeInterface;

    public function createTextNode(): DomNodeInterface;

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