<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

/**
 * Class DefinitionFactoryInterface
 */
interface DefinitionFactoryInterface
{
    /**
     * makeElementDefinition
     * @param string $elementName
     * @param string $tagType
     * @param array<string> $allowedAttributes
     * @param array<string> $allowedSubTags
     * @return string
     */
    public function makeElementDefinition(
        string $elementName,
        string $tagType,
        array $allowedAttributes,
        array $allowedSubTags
    ): string;

    /**
     * makeAttributeDefinition
     * @param string $attributeName
     * @param string $attributeType
     * @param string $valTesterName
     * @param string $global
     * @return string
     */
    public function makeAttributeDefinition(
        string $attributeName,
        string $attributeType,
        string $valTesterName,
        string $global
    ): string;

    /**
     * makeAttributeValueTesterDefinition
     * @param string $testerName
     * @param string $testerType
     * @param string $testerArg
     * @return string
     */
    public function makeAttributeValueTesterDefinition(
        string $testerName,
        string $testerType,
        string $testerArg
    ): string;

    /**
     * makeEventDefinition
     * @param string $eventName
     * @return string
     */
    public function makeEventDefinition(string $eventName): string;
}
