<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\struct\tree\node\TreenodeInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * @extends TreenodeInterface<DomNodeInterface, DomCollectionInterface, DomTreeInterface>
 */
interface DomNodeInterface extends TreenodeInterface, DomElementInterface
{
    /**
     * @param  ValTesterInterface<DomNodeInterface>  $valTester
     *
     * @return bool
     */
    public function hasParentWith(ValTesterInterface $valTester): bool;

    /**
     * @param  ValTesterInterface<DomNodeInterface>  $valTester
     *
     * @return bool
     */
    public function hasAncestorWith(ValTesterInterface $valTester): bool;
}