<?php

namespace pvc\interfaces\err;

interface XCodeStorageInterface
{
    /**
     * @param XCodeDataType  $dataType
     * @return array<string, int>
     */
    public function loadXCodeData(XCodeDataType $dataType): array;

    /**
     * @param XCodeDataType $dataType
     * @param  array<string, int>  $data
     * @return void
     */
    public function saveXCodeData(XCodeDataType $dataType, array $data): void;

    /**
     * @return array<string, int>
     */
    public function loadNextNumData(): array;

    /**
     * @param  array<string, int>  $data
     * @return void
     */
    public function saveNextNumData(array $data): void;
}