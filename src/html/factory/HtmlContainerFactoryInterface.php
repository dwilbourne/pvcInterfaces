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
     * @return ContainerInterface<Definition>
     */
    public function makeElementContainer(): ContainerInterface;

    /**
     * makeAttributeContainer
     * @return ContainerInterface<Definition>
     */
    public function makeAttributeContainer(): ContainerInterface;

    /**
     * makeEventContainer
     * @return ContainerInterface<Definition>
     */
    public function makeEventContainer(): ContainerInterface;
}
