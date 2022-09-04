<?php declare(strict_types = 1);
/**
 * @package: pvc
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version: 1.0
 */

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\validator\ValidatorInterface;

/**
 * Interface TreenodeUnorderedInterface.
 */

interface TreenodeInterface
{
    /**
     * @function getValueValidator
     * @return ValidatorInterface|null
     */
    public function getValueValidator() :? ValidatorInterface;

    /**
     * @function setValueValidator
     * @param ValidatorInterface $validator
     */
    public function setValueValidator(ValidatorInterface $validator) : void;

    /**
     * @function getNodeId
     * @return int
     */
    public function getNodeId() : int;

    /**
     * @function getParentId
     * @return int|null
     */
    public function getParentId() :? int;

    /**
     * @function getTreeId
     * @return int|null
     */
    public function getTreeId() : ? int;

    /**
     * @function getValue
     * @return mixed
     */
    public function getValue();

    /**
     * @function setParentId
     * @param int|null $parentId
     * @return void
     */
    public function setParentId(?int $parentId) : void;

    /**
     * @function setTreeId
     * @param int $treeId
     */
    public function setTreeId(int $treeId): void;

    /**
     * @function setValue
     * @param mixed $value
     */
    public function setValue($value): void;

    /**
     * @function unsetReferences
     */
    public function unsetReferences() : void;

    /**
     * @function hydrate
     * @param array $nodeData
     */
    public function hydrate(array $nodeData) : void;

    /**
     * @function dehydrate
     * @return array
     */
    public function dehydrate() : array;
}
