<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\intl\LocaleInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;

/**
 * @extends TreeInterface<DomNodeInterface>
 */
interface DomTreeInterface extends TreeInterface
{
    public function render(?LocaleInterface $locale = null): string;
}