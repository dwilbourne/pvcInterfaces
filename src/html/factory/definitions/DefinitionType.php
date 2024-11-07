<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Enum DefinitionType
 */
enum DefinitionType: string
{
    case Attribute = 'Attribute';
    case AttributeValueTester = 'AttributeValueTester';
    case Element = 'Element';
    case Event = 'Event';
}