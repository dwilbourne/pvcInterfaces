<?php

namespace pvc\interfaces\container;

/**
 * @phpstan-import-type Args from DefinitionInterface
 */
interface MethodCallInterface
{
    public function getMethodName(): string;

    /**
     * getArguments
     * @return Args
     */
    public function getArguments(): array;
}