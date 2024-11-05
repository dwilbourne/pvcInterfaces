<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\factory\definitions\HtmlDefinitionFactoryInterface;

/**
 * Class HtmlContainerHydratorInterface
 * @template Definition of HtmlDefinitionFactoryInterface
 */
interface HtmlContainerHydratorInterface
{
    /**
     * hydrateElementContainer
     * @param HtmlContainerInterface<Definition> $container
     */
    public function hydrateElementContainer(HtmlContainerInterface $container): void;

    /**
     * HydrateAttributeContainer
     * @param HtmlContainerInterface<Definition> $container
     */
    public function hydrateAttributeContainer(HtmlContainerInterface $container): void;

    /**
     * HydrateEventContainer
     * @param HtmlContainerInterface<Definition> $container
     */
    public function hydrateEventContainer(HtmlContainerInterface $container): void;
}
