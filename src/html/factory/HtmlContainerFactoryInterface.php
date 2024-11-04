<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\factory\definitions\HtmlDefinitionFactoryInterface;

/**
 * Class HtmlContainerFactoryInterface
 * @template Definition of HtmlDefinitionFactoryInterface
 */
interface HtmlContainerFactoryInterface
{
    /**
     * makeElementContainer
     * @return HtmlContainerInterface<Definition>
     */
    public function makeElementContainer(): HtmlContainerInterface;

    /**
     * makeAttributeContainer
     * @return HtmlContainerInterface<Definition>
     */
    public function makeAttributeContainer(): HtmlContainerInterface;

    /**
     * makeEventContainer
     * @return HtmlContainerInterface<Definition>
     */
    public function makeEventContainer(): HtmlContainerInterface;
}
