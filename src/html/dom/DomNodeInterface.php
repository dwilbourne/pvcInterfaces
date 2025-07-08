<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * @extends TreenodeInterface<TreenodeInterface, CollectionInterface>
 */
interface DomNodeInterface extends TreenodeInterface
{
    public function getDomElement() : DomElementInterface;

    public function getContentModel() : ContentModelInterface;

    public function hasParentWith(callable $callback): bool;

    public function hasAncestorWith(callable $callback): bool;
}