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
     * phpcs:ignore
     * @param array{'Name':string, 'TagType':string, 'AllowedAttributes':array<string>,'AllowedSubTags':array<string>} $elementDefs
     * @return ContainerInterface
     */
    public function makeElementContainer(array $elementDefs): ContainerInterface;

    /**
     * makeAttributeContainer
     * @param array{'Name':string, 'AttributeType':string, 'ValueTester':string, 'Global':bool} $attributeDefs
     * @param array{'Name':string, 'TesterType':string, 'TesterArg':string|array<string>} $attributeValueTesterDefs
     * @return ContainerInterface
     */
    public function makeAttributeContainer(array $attributeDefs, array $attributeValueTesterDefs): ContainerInterface;

    /**
     * makeEventContainer
     * @param array<string> $eventDefs
     * @return ContainerInterface
     */
    public function makeEventContainer(array $eventDefs): ContainerInterface;
}
