<?php

namespace pvc\interfaces\err;

interface XCodeStorageInterface
{
    /**
     * loadXCodeData
     * @return array<string, int>
     */
    public function loadXCodeData(): array;

    /**
     * saveXCodeData
     * @param  array<string, int>  $data
     * @return void
     */
    public function saveXCodeData(array $data): void;
}