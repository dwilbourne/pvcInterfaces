<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\dto\DtoFactoryAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * Class TreenodeDTOFactoryAbstractInterface
 * @template PayloadType of HasPayloadInterface
 * @extends DtoFactoryAbstractInterface<PayloadType, TreenodeInterface>
 */
interface TreenodeDTOFactoryAbstractInterface extends DtoFactoryAbstractInterface
{
}
