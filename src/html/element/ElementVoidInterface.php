<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

use pvc\htmlbuilder\definitions\types\AttributeValueDataType;
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
     * @param  string  $name
     * @param  string  $valueType
     * @param  bool  $caseSensitive
     * @param  ValTesterInterface<string|int>|null  $tester
     *
     * @return void
     */
    public function addCustomData(
        string $name,
        string $valueType = 'string',
        bool $caseSensitive = false,
        ?ValTesterInterface $tester = null
    ): void;

    /**
     * @param  string  $name
     * @return void
     */
    public function removeAttribute(string $name): void;
}
