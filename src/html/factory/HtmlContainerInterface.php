<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use Iterator;
use Psr\Container\ContainerInterface;
use pvc\interfaces\html\factory\definitions\AbstractDefinitionFactoryInterface;

/**
 * Class HtmlContainerInterface
 * @template Definition of AbstractDefinitionFactoryInterface
 * @extends Iterator<string>
 *
 * The iterator interface is intended to yield definition ids that exist in the container
 */
interface HtmlContainerInterface extends ContainerInterface, Iterator
{
    /**
     * add
     * @param string $defId
     * @param Definition $definition
     */
    public function add(string $defId, mixed $definition): void;
}
