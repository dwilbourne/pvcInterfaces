<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\html\element\ElementInterface;
use pvc\interfaces\struct\collection\IndexedCollectionInterface;
use pvc\interfaces\struct\collection\IndexedElementInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * ElementInterface refers to html elements,
 * IndexedElementInterface refers to objects that have a setIndex method
 * @extends TreenodeInterface<DomNodeInterface, IndexedCollectionInterface>
 */
interface DomNodeInterface extends ContentModelInterface, ElementInterface, IndexedElementInterface, TreenodeInterface
{
    /**
     * hasAncestorNamed
     * @param  string  $name
     * @return bool
     */
    public function hasAncestorNamed(string $name): bool;
}