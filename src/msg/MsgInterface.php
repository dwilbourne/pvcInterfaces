<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * a Msg has the all components necessary to render a localized message except for the locale.
 *
 * In other words, a Msg has a domain which is used to determine which catalog from which to get a message.  It
 * contains a message id which is used to get a particular message from the domain catalog.  And it contains
 * parameters, which will be inserted into the message template.  Msg objects are locale-agnostic - it is the
 * FrmtrMsg class which is locale-aware and is responsible for rendering the message for a particular locale.
 */
interface MsgInterface
{
    /**
     * getMsgId
     * @return string
     */
    public function getMsgId(): string;

    /**
     * getDomain
     * @return string
     */
    public function getDomain(): string;

    /**
     * getParameters
     * each parameter is a key-value pair where the key is the name of the parameter and the value is the value to be
     * substituted into the message.
     * @return array<string, mixed>
     */
    public function getParameters(): array;

    /**
     * clearContent
     */
    public function clearContent(): void;

    /**
     * setContent
     * @param string $domain
     * @param string $msgId
     * @param array<mixed> $parameters
     */
    public function setContent(string $domain, string $msgId, array $parameters): void;

    /**
     * contentIsSet
     * @return bool
     */
    public function contentIsSet(): bool;
}
