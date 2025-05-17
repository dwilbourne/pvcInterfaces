<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

/**
 * Class ElementVoidInterface
 */
interface ElementVoidInterface
{
    /**
     * @param  string  $name
     * @param  string|int|bool  ...$values
     * @return ElementVoidInterface
     */
    public function setAttribute(string $name, ...$values): ElementVoidInterface;

    /**
     * @param  string  $name
     * @return void
     */
    public function removeAttribute(string $name): void;
}
