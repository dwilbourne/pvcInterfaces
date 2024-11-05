<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\factory\definitions\ConcreteDefinitionFactoryInterface;

/**
 * Class HtmlContainerInterface
 * @template Definition of ConcreteDefinitionFactoryInterface
 */
interface HtmlContainerInterface extends \Psr\Container\ContainerInterface
{
    /**
     * add
     * @param Definition $definition
     */
    public function add(string $defId, mixed $definition): void;
}
