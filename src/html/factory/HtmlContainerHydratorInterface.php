<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\factory\definitions\AbstractDefinitionFactoryInterface;

/**
 * Class HtmlContainerHydratorInterface
 * @template Definition of AbstractDefinitionFactoryInterface
 */
interface HtmlContainerHydratorInterface
{
    /**
     * hydrateElementContainer
     * @param HtmlContainerInterface<Definition> $container
     */
    public function hydrateContainer(HtmlContainerInterface $container, string $definitionsFileName): void;
}
