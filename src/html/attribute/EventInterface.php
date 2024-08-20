<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class EventInterface
 * @extends AttributeAbstractInterface<string>
 */
interface EventInterface extends AttributeAbstractInterface
{
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
