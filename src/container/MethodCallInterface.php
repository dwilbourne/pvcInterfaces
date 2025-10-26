<?php

namespace pvc\interfaces\container;

interface MethodCallInterface
{
    public function getMethodName(): string;

    /**
     * getArguments
     * @return array<mixed>
     */
    public function getArguments(): array;
}