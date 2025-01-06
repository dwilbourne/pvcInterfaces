<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\displayable;

use pvc\interfaces\html\builder\definitions\DefinitionFactoryInterface;
use pvc\interfaces\html\element\ElementVoidInterface;

/**
 * Class RenderableInterface
 * @template VendorSpecificDefinition of DefinitionFactoryInterface
 */
interface RenderableInterface
{
    /**
     * makeHtml
     * @return ElementVoidInterface<VendorSpecificDefinition>
     */
    public function render(): ElementVoidInterface;
}
