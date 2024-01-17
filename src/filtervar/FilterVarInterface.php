<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\filtervar;

/**
 * Class FilterVarInterface
 */
interface FilterVarInterface
{

    /**
     * getLabel
     * @return string
     */
    public function getLabel(): string;

    /**
     * setLabel
     * @param string $label
     */
    public function setLabel(string $label): void;

    /**
     * setFilter
     * @param int $filter
     */
    public function setFilter(int $filter): void;

    /**
     * getFilter
     * @return int
     */
    public function getFilter(): int;

    /**
     * addOption
     * @param string $filterVarOption
     * @param mixed $value
     */
    public function addOption(string $filterVarOption, mixed $value): void;

    /**
     * getOptions
     * @return array
     */
    public function getOptions(): array;

    /**
     * addFlag
     * @param int $filterFlag
     */
    public function addFlag(int $filterFlag): void;

    /**
     * getFlags
     * @return array
     */
    public function getFlags(): array;

    /**
     * getOptionsFlagsArray
     * @return array
     */
    public function getOptionsFlagsArray(): array;
}
