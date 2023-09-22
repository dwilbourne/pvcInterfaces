<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\regex;

interface RegexInterface
{
    /**
     * getPattern
     * @return string
     */
    public function getPattern(): string;

    /**
     * getLabel
     * @return string
     */
    public function getLabel(): string;

    /**
     * setLabel
     * @param string $label
     */
    public function setLabel(string $label): void;

    /**
     * setPattern - sets the pattern - pattern should include delimiters
     * @param string $pattern
     */
    public function setPattern(string $pattern): void;

    /**
     * isCaseInsensitive - defaults to true
     * @return bool
     */
    public function isCaseSensitive(): bool;

    /**
     * setCaseInsensitive
     * @param bool $caseSensitive
     */
    public function setCaseSensitive(bool $caseSensitive): void;

    /**
     * match
     * @param string $subject
     * @param bool $matchAll
     * @return bool
     */
    public function match(string $subject, bool $matchAll = false): bool;

    /**
     * getMatch
     * @param array-key $index
     * @return array<string>|string
     */
    public function getMatch(int|string $index): array|string;

    /**
     * getMatches
     * @return array<string>
     */
    public function getMatches(): array;

    /**
     * escapeString
     * @param string $pattern
     * @param string $delimiter
     * @return string
     */
    public static function escapeString(string $pattern, string $delimiter): string;
}
