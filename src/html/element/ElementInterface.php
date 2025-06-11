<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

use pvc\interfaces\html\dom\DomNodeInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class ElementInterface
 */
interface ElementInterface extends DomNodeInterface
{
    /**
     * @param  string  $name
     * @param  string|int|bool  ...$values
     *
     * @return ElementInterface
     */
    public function setAttribute(string $name, ...$values): ElementInterface;

    /**
     * @param  string  $name
     * @param  string|null  $valueType
     * value type can be one of the following: 'string', 'int', or 'bool'
     * @param  bool|null  $caseSensitive
     * @param  ValTesterInterface<string|int|bool>|null  $tester
     *
     * @return void
     */
    public function addCustomData(
        string $name,
        ?string $valueType = null,
        ?bool $caseSensitive = null,
        ?ValTesterInterface $tester = null
    ): void;

    /**
     * @param  string  $name
     * @return void
     */
    public function removeAttribute(string $name): void;
}
