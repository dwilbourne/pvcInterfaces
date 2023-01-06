<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\validator\ValidatorInterface;

/**
 * Interface TreenodeUnorderedInterface.
 * @template NodeType
 */
interface TreenodeUnorderedInterface
{
	/**
	 * getNodeId
	 * @return int
	 */
	public function getNodeId(): int;

	/**
	 * @function getParentId
	 * @return int|null
	 */
	public function getParentId(): ?int;

	/**
	 * @function getTreeId
	 * @return int|null
	 */
	public function getTreeId(): ?int;

	/**
	 * getValueValidator
	 * @return ValidatorInterface|null
	 */
	public function getValueValidator() : ? ValidatorInterface;

	/**
	 * @function getValue
	 * @return NodeType
	 */
	public function getValue();

	/**
	 * @function setParentId
	 * @param int|null $parentId
	 * @return void
	 */
	public function setParentId(?int $parentId): void;

	/**
	 * @function setTreeId
	 * @param int $treeId
	 */
	public function setTreeId(int $treeId): void;

	/**
	 * setValueValidator
	 * @param callable $callable
	 */
	public function setValueValidator(callable $callable) : void;

	/**
	 * @function setValue
	 * @param NodeType $value
	 */
	public function setValue($value): void;

	/**
	 * @function unsetReferences
	 */
	public function unsetReferences(): void;

	/**
	 * @function hydrate
	 * @param NodeType[] $nodeData
	 */
	public function hydrate(array $nodeData): void;

	/**
	 * @function dehydrate
	 * @return NodeType[]
	 */
	public function dehydrate(): array;
}
