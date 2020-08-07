<?php

declare(strict_types = 1);

namespace Constup\PhpTextProcessing\RegexGenerator\General;

/**
 * Class GeneralRegexGenerator
 *
 * @package Constup\PhpTextProcessing\RegexGenerator\General
 */
class GeneralRegexGenerator implements GeneralRegexGeneratorInterface
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
    ): string {
        return '#(' . preg_quote($startDelimiter) . ')(.*?)(' . preg_quote($endDelimiter) . ')#' . $regexOptions;
    }

    /**
     * @param array  $pattern      Format: ['isRegex' => bool, 'value' => string]
     * @param string $regexOptions
     *
     * @return string
     */
    public function generateMatchPattern(
        array $pattern,
        string $regexOptions = 's'
    ): string {
        $regex = '#';
        foreach ($pattern as $keyword) {
            $regex .= ($keyword['isRegex'] === true) ? $keyword['value'] : '(' . preg_quote($keyword['value']) . ')';
        }
        $regex .= '#' . $regexOptions;

        return $regex;
    }

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
    ): string {
        $regex = '#';
        $counter = 0;
        $numberOfPatterns = count($prefixes);
        foreach ($prefixes as $prefix) {
            $regex .= ($counter === 0) ? '(' : '';
            $regex .= ($prefix['isRegex'] === true) ? $prefix['value'] : '(' . preg_quote($prefix['value']) . ')';
            $regex .= ($counter === $numberOfPatterns - 1) ? ')' : '|';
            ++$counter;
        }
        if ($numberOfPatterns > 0) {
            $regex .= '*?';
        }
        foreach ($pattern as $keyword) {
            $regex .= ($keyword['isRegex'] === true) ? $keyword['value'] : '(' . preg_quote($keyword['value']) . ')';
        }
        $regex .= '#' . $regexOptions;

        return $regex;
    }
}
