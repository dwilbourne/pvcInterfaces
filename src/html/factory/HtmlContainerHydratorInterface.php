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
     * setDefinitionsDir
     * @param string $dir
     */
    public function setDefinitionsDir(string $dir): void;

    /**
     * getDefinitionsDir
     * @return string
     */
    public function getDefinitionsDir(): string;

    /**
     * setDefinitionFactory
     * @param AbstractDefinitionFactoryInterface<Definition> $definitionFactory
     * @return void
     */
    public function setDefinitionFactory(AbstractDefinitionFactoryInterface $definitionFactory): void;

    /**
     * getDefinitionFactory
     * @return AbstractDefinitionFactoryInterface<Definition>
     */
    public function getDefinitionFactory(): AbstractDefinitionFactoryInterface;

    /**
     * hydrateElementContainer
     * @param HtmlContainerInterface<Definition, DefId> $container
     */
    public function hydrateContainer(HtmlContainerInterface $container, string $definitionsFileName): void;
}
