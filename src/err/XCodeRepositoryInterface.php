<?php

namespace pvc\interfaces\err;

interface XCodeRepositoryInterface
{
    /**
     * @param XCodePrefixType  $dataType
     *
     * @return array<string, int>
     */
    public function loadPrefixes(XCodePrefixType $dataType): array;

    /**
     * @param  XCodePrefixType $dataType
     * @param  array<string, int>  $data
     *
     * @return void
     */
    public function savePrefixes(XCodePrefixType $dataType, array $data): void;

    /**
     * @return array<string, int>
     */
    public function loadXCodes(): array;

    /**
     * @param  array<string, int>  $data
     * @return void
     */
    public function saveXCodes(array $data): void;

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