<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\storage\filesys;

/**
 * Class FileAccessInterface
 */
interface FileAccessInterface
{
    public function fileEntryExists(string $fileEntryName): bool;
    public function fileExists(string $fileName): bool;

    public function fileIsReadable(string $fileName): bool;

    public function fileIsWriteable(string $fileName): bool;

    public function directoryExists(string $dirName): bool;

    public function directoryIsReadable(string $dirName): bool;

    public function directoryIsWriteable(string $dirName): bool;

    public function directoryGetContents(string $dirName, bool $withDots = false, int $sortOrder =
    SCANDIR_SORT_ASCENDING): array|false;

    public function fileGetContents(string $fileName): string|false;

    public function filePutContents(string $fileName, string $data): int|false;

    public function openFile(string $fileName, string $mode): bool;

    public function readFile(int $length = 8096);

    public function writeFile(string $data): bool;

    public function closeFile(): bool;

    public function eof(): bool;

    public function fileGetLine(): string|false;

    public function filePutLine(string $data): bool;



}
