<?php

declare(strict_types = 1);

namespace Constup\PhpTextProcessing\General;

/**
 * Class DelimiterProcessor
 *
 * @package Constup\PhpTextProcessing\General
 */
interface DelimiterProcessorInterface
{
    /**
     * @param string   $source
     * @param string   $startDelimiter
     * @param string   $endDelimiter
     * @param string   $replacementText
     * @param bool     $preserveDelimiters
     * @param int      $limit
     * @param int|null $count
     *
     * @return string
     */
    public function replaceTextBetweenDelimiters(
        string $source,
        string $startDelimiter,
        string $endDelimiter,
        string $replacementText,
        bool $preserveDelimiters = true,
        int $limit = -1,
        ?int &$count = null
    ): string;

    /**
     * @param string $source
     * @param string $startDelimiter
     * @param string $endDelimiter
     * @param bool   $includeDelimitersInResult
     *
     * @return string[]
     */
    public function extractTextBetweenDelimiters(
        string $source,
        string $startDelimiter,
        string $endDelimiter,
        bool $includeDelimitersInResult = true
    ): array;

    /**
     * @param string   $source
     * @param string[] $pattern
     * @param int      $flags
     * @param int      $offset
     *
     * @return array
     */
    public function matchPattern(
        string $source,
        array $pattern,
        $flags = PREG_PATTERN_ORDER,
        $offset = 0
    ): array;

    /**
     * @param string  $source
     * @param array[] $pattern
     * @param array[] $prefixes
     *
     * @return array
     */
    public function matchPatternWithPrefixes(
        string $source,
        array $pattern,
        array $prefixes
    ): array;
}
