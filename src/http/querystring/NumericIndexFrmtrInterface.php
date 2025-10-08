<?php

namespace pvc\interfaces\http\querystring;

interface NumericIndexFrmtrInterface
{
    public function setNumericPrefix(string $numericPrefix): void;

    /**
     * useOrdinalPositionAsIndexForAutoAssignedKeys
     * @param  bool  $useOrdinalPositionAsIndex
     *
     * @return void
     * it is a small detail, but http_build_query uses the ordinal position of
     * the array value.  Note that this is different from how php normally
     * auto-assigns numeric indices.
     */
    public function useOrdinalPositionAsIndexForAutoAssignedKeys(bool $useOrdinalPositionAsIndex
    ): void;

    /**
     * format
     * @param  array  $array
     *
     * @return array
     * returns an array where the numeric indices have been formatted into strings
     */
    public function format(array $array): array;
}