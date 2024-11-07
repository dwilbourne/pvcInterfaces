<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\factory\definitions\AbstractDefinitionFactoryInterface;
use pvc\interfaces\html\factory\definitions\DefinitionType;

/**
 * Class HtmlContainerHydratorInterface
 * @template Definition of AbstractDefinitionFactoryInterface
 * @template DefId of HtmlContainerInterface
 *
 * @phpstan-import-type  DefinitionFileNames from AbstractDefinitionFactoryInterface
 */
interface HtmlContainerHydratorInterface
{
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
     * setDefinitionFileNames
     * @param DefinitionFileNames $definitionFileNames
     */
    public function setDefinitionFileNames(array $definitionFileNames): void;

    /**
     * getDefinitionFileNames
     * @return DefinitionFileNames
     */
    public function getDefinitionFileNames(): array;

    /**
     * hydrateElementContainer
     * @param HtmlContainerInterface<Definition, DefId> $container
     */
    public function hydrateContainer(HtmlContainerInterface $container, DefinitionType $definitionType): void;
}
