<?php

namespace pvc\interfaces\err;

interface XCodeStorageInterface
{
    /**
     * @param XCodeDataTypes $dataType
     * @return array<string, int>
     */
    public function loadXCodeData(XCodeDataTypes $dataType): array;

    /**
     * saveXCodeData
     * @param  array<string, int>  $data
     * @return void
     */
    public function saveXCodeData(array $data): void;
}