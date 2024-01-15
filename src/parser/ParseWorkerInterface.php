<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\parser;

/**
 * Class ParseWorkerInterface
 *
 * These classes do the actual work of parsing the string.  They also contain the parameter values necessary to create
 * a message in the event the parse failed.
 */
interface ParseWorkerInterface
{
    /**
     * @function parse
     * @param string $data
     * @return bool
     */
    public function parse(string $data): bool;

    /**
     * @function getParsedValue
     * @return mixed
     */
    public function getParsedValue();

    /**
     * getMsgId
     * @return string
     */
    public function getMsgId(): string;

    /**
     * getMsgParameters
     * @return array<mixed>
     */
    public function getMsgParameters(): array;

    /**
     * getLabel
     * @return string
     */
    public function getLabel(): string;
}
