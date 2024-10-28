<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use Psr\Container\ContainerInterface;

/**
 * Class HtmlContainerFactoryInterface
 */
interface HtmlContainerFactoryInterface
{
    /**
     * makeElementContainer
     * @param string $elementDefs
     * @return ContainerInterface
     */
    public function makeElementContainer(string $elementDefs): ContainerInterface;

    /**
     * makeAttributeContainer
     * @param string $attributeDefs
     * @param string $attributeValueTesterDefs
     * @return ContainerInterface
     */
    public function makeAttributeContainer(string $attributeDefs, string $attributeValueTesterDefs): ContainerInterface;

    /**
     * makeEventContainer
     * @param string $eventDefs
     * @return ContainerInterface
     */
    public function makeEventContainer(string $eventDefs): ContainerInterface;
}
