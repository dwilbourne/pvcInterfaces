<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class TagVoidInterface
 * @template AttributeValueType
 */
interface TagVoidInterface
{
    /**
     * getName
     * @return string
     */
    public function getName(): string;

    /**
     * setName
     * @param string $name
     * @return mixed
     */
    public function setName(string $name);

    /**
     * setAttribute
     * @param string $name
     * @param string|array<string>|bool $value
     */
    public function setAttribute(string $name, string|array|bool $value): void;

    /**
     * setCustomData
     * @param string $name
     * @param string $value
     * @param ValTesterInterface<string> $tester
     * @return mixed
     */
    public function setCustomData(string $name, string $value, ValTesterInterface $tester);

    /**
     * getAttribute
     * @param string $name
     * @return AttributeInterface<AttributeValueType>|null
     */
    public function getAttribute(string $name): ?AttributeInterface;

    /**
     * getAttributes
     * @return array<AttributeInterface<AttributeValueType>>
     */
    public function getAttributes(int $attributeTypes): array;

    /**
     * removeAttribute
     * @param string $name
     */
    public function removeAttribute(string $name): void;

    /**
     * generateOpeningTag
     * @return string
     */
    public function generateOpeningTag(): string;
}
