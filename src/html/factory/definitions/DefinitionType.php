<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Enum DefinitionType
 */
enum DefinitionType
{
    case Attribute;
    case AttributeValueTester;
    case Element;
    case Event;
}
