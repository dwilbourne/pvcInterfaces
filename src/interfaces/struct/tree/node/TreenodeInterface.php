<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\validator\ValidatorInterface;

/**
 * Interface TreenodeInterface.
 * @template NodeValueType
 */
interface TreenodeInterface
{

	/**
	 * setNodeId
	 * @param int $nodeId
	 */
	public function setNodeId(int $nodeId) : void;
	/**
	 * getNodeId
	 * @return int|null
	 */
	public function getNodeId(): ?int;

	/**
	 * @function setParentId
	 * @param int|null $parentId
	 * @return void
	 */
	public function setParentId(?int $parentId): void;

	/**
	 * @function getParentId
	 * @return int|null
	 */
	public function getParentId(): ?int;

	/**
	 * @function isRoot
	 * @return bool
	 */
	public function isRoot() : bool;

	/**
	 * @function setTreeId
	 * @param int $treeId
	 */
	public function setTreeId(int $treeId): void;

	/**
	 * @function getTreeId
	 * @return int|null
	 */
	public function getTreeId(): ?int;

	/**
	 * setValueValidator
	 * @param ValidatorInterface $callable
	 */
	public function setValueValidator(ValidatorInterface $callable) : void;

	/**
	 * getValueValidator
	 * @return ValidatorInterface|null
	 */
	public function getValueValidator() : ? ValidatorInterface;

	/**
	 * @function setValue
	 * @param NodeValueType $value
	 */
	public function setValue($value): void;

	/**
	 * @function getValue
	 * @return NodeValueType
	 */
	public function getValue();

	/**
	 * @function hydrate
	 * @param mixed[] $nodeData
	 */
	public function hydrate(array $nodeData): void;

	/**
	 * @function dehydrate
	 * @return mixed[]
	 */
	public function dehydrate(): array;

	/**
	 * equals
	 * @param TreenodeInterface<NodeValueType> $testNode
	 * @return bool
	 */
	public function equals(TreenodeInterface $testNode) : bool;
}
