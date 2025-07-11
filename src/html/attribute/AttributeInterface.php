<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeInterface
 *
 */
interface AttributeInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * render
     *
     * @return string
     */
    public function render(): string;
}
