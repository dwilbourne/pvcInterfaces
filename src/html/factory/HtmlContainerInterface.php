<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use IteratorAggregate;
use Psr\Container\ContainerInterface;
use pvc\interfaces\html\factory\definitions\AbstractDefinitionFactoryInterface;

/**
 * Class HtmlContainerInterface
 * @template Definition of AbstractDefinitionFactoryInterface
 * @template DefId
 * @extends IteratorAggregate<DefId, Definition>
 */
interface HtmlContainerInterface extends ContainerInterface, IteratorAggregate
{
    /**
     * add
     * @param string $defId
     * @param Definition $definition
     */
    public function add(string $defId, mixed $definition): void;
}
