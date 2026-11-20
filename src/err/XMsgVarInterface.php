<?php

namespace pvc\interfaces\err;

interface XMsgVarInterface
{
    /**
     * @param  string  $varName
     * @return void
     */
    public function setVariableName(string $varName): void;

    /**
     * @return string
     */
    public function getVariableName(): string;

    /**
     * @param  string  $format
     * @return void
     */
    public function setFormat(string $format): void;

    /**
     * @return string
     */
    public function getFormat(): string;
}