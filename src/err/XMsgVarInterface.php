<?php

namespace pvc\interfaces\err;

interface XMsgVarInterface
{
    /**
     * @return string
     */
    public function getVariableName(): string;

    /**
     * @return string
     */
    public function getFormat(): string;
}