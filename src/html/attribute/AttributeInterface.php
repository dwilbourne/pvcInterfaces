<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeInterface
 * This interface is meant to distinguish between events and attributes.  Events inherit from AttributeAbstractInterface
 * as well.  All attributes inherit from this.
 */
interface AttributeInterface extends AttributeAbstractInterface
{
}
