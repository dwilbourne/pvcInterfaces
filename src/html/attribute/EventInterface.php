<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class EventInterface
 * @extends AttributeAbstractInterface<string>
 *
 * events have scripts, so to make the code a little easier to read, there are setScript and getScript methods
 */
interface EventInterface extends AttributeAbstractInterface
{
    /**
     * setValue
     * @param string $value
     */
    public function setValue($value): void;

    /**
     * getValue
     * @return string|null
     */
    public function getValue(): mixed;

    /**
     * setScript
     * @param string $script
     */
    public function setScript(string $script): void;

    /**
     * getScript
     * @return string|null
     */
    public function getScript(): ?string;
}
