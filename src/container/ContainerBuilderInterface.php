<?php

namespace pvc\interfaces\container;

use Psr\Container\ContainerInterface;

/**
 * @phpstan-type Args array<string|number>
 * @phpstan-type ContainerDefArray array{'alias': string, 'resolvableString': string, 'constructorArgs': Args, 'methodCalls': array<string, Args>, 'factory': bool}
 * @phpstan-type MethodCallArray array{'methodName': string, 'arguments': array<Args>}
 */
interface ContainerBuilderInterface
{
    /**
     * build
     *
     * @param  array<ContainerDefArray>  $pvcDefinitions
     *
     * @return ContainerInterface
     */
    public function build(array $pvcDefinitions): ContainerInterface;
}