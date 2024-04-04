<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeVoidInterface
 */
interface AttributeVoidInterface extends AttributeInterface
{
    /**
     * setValue
     * @param string $value
     */
    public function setValue(string $value): void;
}
