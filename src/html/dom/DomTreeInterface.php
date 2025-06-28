<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\intl\LocaleInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;

/**
 * @extends TreeInterface<DomElementInterface>
 */
interface DomTreeInterface extends TreeInterface
{
    public function render(LocaleInterface $locale): string;
}