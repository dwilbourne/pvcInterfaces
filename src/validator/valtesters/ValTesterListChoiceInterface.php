<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\validator\valtesters;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class ValTesterListChoiceInterface
 * @template ChoicesDataType
 * @template DataType
 * @extends ValTesterInterface<DataType>
 */
interface ValTesterListChoiceInterface extends ValTesterInterface
{
    /**
     * setChoices
     * @param array<ChoicesDataType> $choices
     */
    public function setChoices(array $choices): void;

    /**
     * getChoices
     * @return array<ChoicesDataType>
     */
    public function getChoices(): array;
}
