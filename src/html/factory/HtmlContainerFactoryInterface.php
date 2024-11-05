<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\factory\definitions\AbstractDefinitionFactoryInterface;

/**
 * Class HtmlContainerFactoryInterface
 * @template Definition of AbstractDefinitionFactoryInterface
 */
interface HtmlContainerFactoryInterface
{
    /**
     * makeContainer
     * @return HtmlContainerInterface<Definition>
     */
    public function makeContainer(): HtmlContainerInterface;
}
