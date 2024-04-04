<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class EventInterface
 *
 * events have scripts, not values, so keep the language a little cleaner......
 */
interface EventInterface extends AttributeAbstractInterface
{
    public function setScript(string $script): void;

    /**
     * getScript
     * @return string
     */
    public function getScript(): string;
}
