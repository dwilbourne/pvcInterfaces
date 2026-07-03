<?php

namespace pvc\interfaces\err;

interface XCodeStorageInterface
{
    /**
     * @param XCodePrefixType  $dataType
     *
     * @return array<string, int>
     */
    public function loadXCodeData(XCodePrefixType $dataType): array;

    /**
     * @param  XCodePrefixType $dataType
     * @param  array<string, int>  $data
     *
     * @return void
     */
    public function saveXCodeData(XCodePrefixType $dataType, array $data): void;

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