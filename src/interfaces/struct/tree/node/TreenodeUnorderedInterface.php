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
	 * @param NodeType $value
	 */
	public function setValue($value): void;

	/**
	 * @function getValue
	 * @return NodeType
	 */
	public function getValue();

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
