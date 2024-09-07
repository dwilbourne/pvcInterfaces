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
    public function fileExists(string $filename): bool;

    public function fileIsReadable(string $filename): bool;

    public function fileIsWriteable(string $filename): bool;

    public function fileGetContents(string $filename): string|false;

    public function filePutContents(string $filename, string $data): bool;

    public function fileGetLine(): string|false;

    public function filePutLine(string $data): bool;

    public function openFile(string $filename, string $mode): bool;

    public function readFile(int $length = 8096);

    public function writeFile(string $data): bool;

    public function closeFile(): bool;

    public function eof(): bool;

    public function directoryExists(string $dirname): bool;

    public function directoryIsWriteable(string $dirname): bool;

    public function directoryIsReadable(string $dirname): bool;

    public function getDirectoryContents(string $dirname, bool $withDots = false): ?array;
}
