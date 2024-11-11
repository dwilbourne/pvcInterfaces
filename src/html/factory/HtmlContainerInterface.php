<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use Psr\Container\ContainerInterface;
use pvc\interfaces\html\factory\definitions\DefinitionFactoryInterface;

/**
 * Class HtmlContainerInterface
 * @template Definition of DefinitionFactoryInterface
 */
interface HtmlContainerInterface extends ContainerInterface
{
    /**
     * add
     * @param string $defId
     * @param Definition|null $definition
     */
    public function add(string $defId, mixed $definition = null): void;
}
