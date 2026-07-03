<?php

namespace pvc\interfaces\err;

interface XCodeStorageInterface
{
    /**
     * @param XCodeDataType  $dataType
     *
     * @return array<string, int>
     */
    public function loadXCodeData(XCodeDataType $dataType): array;

    /**
     * saveXCodeData
     * @param  array<string, int>  $data
     * @return void
     */
    public function saveXCodeData(array $data): void;
}