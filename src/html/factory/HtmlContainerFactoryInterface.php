<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use Psr\Container\ContainerInterface;

/**
 * Class HtmlContainerFactoryInterface
 */
interface HtmlContainerFactoryInterface
{
    /**
     * makeElementContainer
     * @return ContainerInterface
     */
    public function makeElementContainer(): ContainerInterface;

    /**
     * makeAttributeContainer
     * @return ContainerInterface
     */
    public function makeAttributeContainer(): ContainerInterface;

    /**
     * makeEventContainer
     * @return ContainerInterface
     */
    public function makeEventContainer(): ContainerInterface;
}
