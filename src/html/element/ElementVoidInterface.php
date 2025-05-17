<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

use pvc\interfaces\validator\ValTesterInterface;

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
     * setCustomData
     * @param string $attributeName
     * @param ValTesterInterface<string>|null $valTester
     * @return void
     */
    public function addCustomData(
        string $attributeName,
        ?ValTesterInterface $valTester = null
    ): void;

    /**
     * @param  string  $name
     * @return void
     */
    public function removeAttribute(string $name): void;
}
