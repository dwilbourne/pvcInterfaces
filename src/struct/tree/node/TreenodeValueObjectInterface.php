<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

/**
 * Class TreenodeValueObjectInterface
 * @template NodeValueType
 */
interface TreenodeValueObjectInterface
{
    /**
     * getNodeId
     * @return int
     */
    public function getNodeId(): int;

    /**
     * getParentId
     * @return int|null
     */
    public function getParentId(): ?int;

    /**
     * getNodeValue
     * @return NodeValueType
     */
    public function getNodeValue();
}