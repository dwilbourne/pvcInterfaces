<?php

namespace pvc\interfaces\container;

/**
 * create vendor-neutral definitions to build objects
 *
 * @phpstan-type Args array<string|number>
 * @phpstan-type MethodCallArray array{'methodName': string, 'arguments'?: array<Args>}
 *
 * @phpstan-type ContainerDefArray array{'alias'?: string, 'resolvableString': string, 'constructorArgs'?: Args, 'methodCalls'?: array<string, Args>, 'isFactory'?: bool}
 *
 */
interface DefinitionInterface
{
}