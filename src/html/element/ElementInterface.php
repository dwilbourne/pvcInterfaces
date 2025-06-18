<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\dom\DomNodeInterface;

/**
 * Class ElementInterface
 * @phpstan-import-type ValueType from AttributeInterface
 */
interface ElementInterface extends DomNodeInterface
{
    /**
     * @param  string  $name
     * @param  ValueType  ...$values
     *
     * @return ElementInterface
     */
    public function setAttribute(string $name, ...$values): ElementInterface;

    /**
     * @param  string  $name
     * @return void
     */
    public function removeAttribute(string $name): void;
}
