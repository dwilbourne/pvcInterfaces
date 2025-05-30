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
     * @return array<string, mixed>
     */
    public function getOptions(): array;

    /**
     * addFlag
     * @param int $filterFlag
     */
    public function addFlag(int $filterFlag): void;

    /**
     * getFlags
     * @return int []
     */
    public function getFlags(): array;

    /**
     * getOptionsFlagsArray
     * @return array<string, mixed>
     */
    public function getOptionsFlagsArray(): array;

    /**
     * @param  string  $value
     * @return mixed
     * returns whatever the underlying filter_var verb returns
     */
    public function filter(string $value): mixed;
}
