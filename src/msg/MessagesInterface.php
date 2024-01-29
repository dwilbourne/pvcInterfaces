<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * Class MessagesInterface is used by the pvc library to for php files/objects that store translation strings.
 */
interface MessagesInterface
{
    /**
     * getMessageStrings
     * @return array<string, string>
     */
    public function getMessageStrings(): array;
}
