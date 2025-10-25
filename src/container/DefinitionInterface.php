<?php

namespace pvc\interfaces\container;

/**
 * create vendor-neutral definitions to build objects
 *
 * @phpstan-type Arg string|number
 * @phpstan-type Args array<Arg>
 * @phpstan-type MethodCallArray array{'methodName': string, 'arguments'?: Args}
 * @phpstan-type DefinitionArray array{'alias'?: string, 'resolvableString': string, 'constructorArgs'?: Args, 'methodCalls'?: array<MethodCallArray>}
 * @phpstan-type DefinitionsArray array<DefinitionArray>
 *
 * some container implementations provide a mechanism for creating a new instance of an object each time
 * it is retrieved from the container.  E.g. the concept of a factory is embedded in the definitions which
 * fuel the container (see League\Container from the php League)
 *
 * Other container implementations do not. (see phpdi).
 *
 * This discrepancy arises because of the PDS-11 specification which says that when you get an object
 * from the container, it MAY or MAY NOT be the same instance each time.
 *
 * In my view, this is a flaw.  The PSR should define a specific behavior.  For example, if
 * all containers should be able to make a new instance each time, then change the PSR to add
 * a 'make' method to ContainerInterface.
 *
 * But since that is not currently the case, the pvc Container->get method will always return the same instance
 * of an object because all implementations are capable of that much.  Of course, if that object is
 * a factory, then you can get that factory  and use it in your code to make as many new instances of
 * something else as you want.
 */
interface DefinitionInterface
{
    public function setAlias(string $alias): void;
    public function getAlias(): string;

    public function setClassString(string $classString): void;
    public function getClassString(): string;

    /**
     * getConstructorArgs
     * @return Args
     */
    public function getConstructorArgs(): array;

    /**
     * addConstructorArgs
     * @param  Args  $args
     *
     * @return void
     */
    public function addConstructorArgs(array $args): void;

    /**
     * addConstructorArg
     * @param Arg $arg
     *
     * @return void
     */
    public function addConstructorArg($arg): void;

    /**
     * getMethodCalls
     * @return array<MethodCallInterface>
     */
    public function getMethodCalls(): array;

    public function addMethodCall(MethodCallInterface $methodCall): void;
}