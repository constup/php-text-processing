<?php

declare(strict_types = 1);

namespace Constup\PhpTextProcessing\RegexGenerator\General;

/**
 * Class GeneralRegexGenerator
 *
 * @package Constup\PhpTextProcessing\RegexGenerator\General
 */
interface GeneralRegexGeneratorInterface
{
    /**
     * @param string $startDelimiter
     * @param string $endDelimiter
     * @param string $regexOptions
     *
     * @return string
     */
    public function generateReplaceTextBetweenDelimiters(
        string $startDelimiter,
        string $endDelimiter,
        string $regexOptions = 's'
    ): string;

    /**
     * @param array  $pattern      Format: ['isRegex' => bool, 'value' => string]
     * @param string $regexOptions
     *
     * @return string
     */
    public function generateMatchPattern(
        array $pattern,
        string $regexOptions = 's'
    ): string;

    /**
     * @param array  $pattern      Format: ['isRegex' => bool, 'value' => string]
     * @param array  $prefixes     Format: ['isRegex' => bool, 'value' => string]
     * @param string $regexOptions
     *
     * @return string
     */
    public function generateMatchPatternWithPrefixes(
        array $pattern,
        array $prefixes,
        string $regexOptions = 's'
    ): string;
}
