<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\displayable;

use pvc\interfaces\html\factory\definitions\DefinitionFactoryInterface;
use pvc\interfaces\html\tag\TagVoidInterface;

/**
 * Class RenderableInterface
 * @template VendorSpecificDefinition of DefinitionFactoryInterface
 */
interface RenderableInterface
{
    /**
     * makeHtml
     * @return TagVoidInterface<VendorSpecificDefinition>
     */
    public function makeHtml(): TagVoidInterface;
}
