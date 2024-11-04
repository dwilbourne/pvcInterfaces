<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\factory\definitions\HtmlDefinitionFactoryInterface;

/**
 * Class ContainerInterface
 * @template Definition of HtmlDefinitionFactoryInterface
 */
interface ContainerInterface extends \Psr\Container\ContainerInterface
{
    /**
     * add
     * @param Definition $definition
     */
    public function add(mixed $definition): void;
}
