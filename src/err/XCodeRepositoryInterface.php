<?php

namespace pvc\interfaces\err;

/**
 * The methods here must all be static.  The pvc exception classes extend
 * \Exception, and it would be a bad idea to mess with the constructor signature.
 * On the other hand, Exceptions in pvc are more modular than the way vanilla
 * php envisions.  The messages are stored separately from each exception
 * class.  The codes are all stored centrally.  The net of it is that we
 * need to be able to get codes and messages without having to inject those
 * things into each exception class.
 */
interface XCodeRepositoryInterface
{
    /**
     * @param XCodePrefixType  $dataType
     *
     * @return array<string, int>
     */
    public static function loadPrefixes(XCodePrefixType $dataType): array;

    /**
     * @param  XCodePrefixType $dataType
     * @param  array<string, int>  $data
     *
     * @return void
     */
    public static function savePrefixes(XCodePrefixType $dataType, array $data): void;

    /**
     * @return array<string, int>
     */
    public static function loadXCodes(): array;

    /**
     * @param  array<string, int>  $data
     * @return void
     */
    public static function saveXCodes(array $data): void;

    /**
     * @return array<string, int>
     */
    public static function loadNextNumData(): array;

    /**
     * @param  array<string, int>  $data
     * @return void
     */
    public static function saveNextNumData(array $data): void;
}