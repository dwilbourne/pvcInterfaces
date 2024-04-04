<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class EventInterface
 *
 * events have scripts, so this may make the code a little easier to read.  in real life these
 * methods just call setValue and getValue.
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
     * @return string
     */
    public function getScript(): string;
}
