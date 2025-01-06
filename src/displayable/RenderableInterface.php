<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\displayable;

use pvc\interfaces\html\element\ElementVoidInterface;
use pvc\interfaces\html\factory\definitions\DefinitionFactoryInterface;

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
    public function makeHtml(): ElementVoidInterface;
}
