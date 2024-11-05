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
 * @template DefId of HtmlContainerInterface
 */
interface HtmlContainerHydratorInterface
{
    /**
     * hydrateElementContainer
     * @param HtmlContainerInterface<Definition, DefId> $container
     */
    public function hydrateContainer(HtmlContainerInterface $container, string $definitionsFileName): void;
}
